<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Illuminate\Console\AppNamespaceDetectorTrait;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\DBSchema;
use TCG\Voyager\Http\Controllers\Traits\DatabaseUpdate;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Permission;
use TCG\Voyager\Http\Controllers\Traits\BreadRelationshipParser;
use TCG\Voyager\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerBreadController;
use Illuminate\Support\Facades\Auth;
use DevDojo\Chatter\Models\Models;
use App\PostsToComments;

class VoyagerController extends VoyagerBreadController
{
    public function store(Request $request)
    {
        $slug = $this->getSlug($request);

        $dataType = DataType::where('slug', '=', $slug)->first();

        // Check permission
        Voyager::can('add_' . $dataType->name);

        if (function_exists('voyager_add_post')) {
            $url = $request->url();
            voyager_add_post($request);
        }

        $data = new $dataType->model_name();
        $this->insertUpdateData($request, $slug, $dataType->addRows, $data);

        // add Post to Comment Relation
        $id = $request->input('id');
        $postToComments = new PostsToComments();
        $postToComments->post_id = $id;
        $postToComments->chatter_id = 0;
        $postToComments->save();

        //create new Chatter post when new_post is selected
        if (!$request->new_post) {

            $request->request->add(['body_content' => strip_tags($request->body)]);

            // *** Let's gaurantee that we always have a generic slug *** //
            $slug = str_slug($request->title, '-');

            $discussion_exists = Models::discussion()->where('slug', '=', $slug)->first();
            $incrementer = 1;
            $new_slug = $slug;
            while (isset($discussion_exists->id)) {
                $new_slug = $slug . '-' . $incrementer;
                $discussion_exists = Models::discussion()->where('slug', '=', $new_slug)->first();
                $incrementer += 1;
            }

            if ($slug != $new_slug) {
                $slug = $new_slug;
            }

            $new_discussion = [
                'title' => $request->title,
                'chatter_category_id' => $request->chatter_category_id,
                'user_id' => Auth::user()->id,
                'slug' => $slug,
                'color' => '#64274D',
            ];

            $category = Models::category()->find($request->chatter_category_id);
            if (!isset($category->slug)) {
                $category = Models::category()->first();
            }

            $discussion = Models::discussion()->create($new_discussion);

            $new_post = [
                'chatter_discussion_id' => $discussion->id,
                'user_id' => Auth::user()->id,
                'body' => '<p>Tu dyskutujemy o wpisie ' . $request->title . '</p>',
            ];

            if (config('chatter.editor') == 'simplemde'):
                $new_post['markdown'] = 1;
            endif;

            // add the user to automatically be notified when new posts are submitted
            $discussion->users()->attach(Auth::user()->id);

            $post = Models::post()->create($new_post);

            // add Post to Comment Relation
            $id = $request->input('id');
            $postToComments = new PostsToComments();
            $postToComments->post_id = $data['original']['id'];
            $postToComments->chatter_id = $discussion->id;
            $postToComments->save();

        }
        return redirect()
            ->route("voyager.{$dataType->slug}.index")
            ->with([
                'message' => "Successfully Added New {$dataType->display_name_singular}",
                'alert-type' => 'success',
            ]);
    }

    public function update(Request $request, $id)
    {
        $slug = $this->getSlug($request);

        $dataType = DataType::where('slug', '=', $slug)->first();

        // Check permission
        Voyager::can('edit_'.$dataType->name);

        $data = call_user_func([$dataType->model_name, 'findOrFail'], $id);

        $this->insertUpdateData($request, $slug, $dataType->editRows, $data);

        $request->request->add(['body_content' => strip_tags($request->body)]);

        // *** Let's gaurantee that we always have a generic slug *** //
        $slug = str_slug($request->title, '-');

        $discussion_exists = Models::discussion()->where('slug', '=', $slug)->first();
        $incrementer = 1;
        $new_slug = $slug;
        while (isset($discussion_exists->id)) {
            $new_slug = $slug . '-' . $incrementer;
            $discussion_exists = Models::discussion()->where('slug', '=', $new_slug)->first();
            $incrementer += 1;
        }

        if ($slug != $new_slug) {
            $slug = $new_slug;
        }

        $new_discussion = [
            'title' => $request->title,
            'chatter_category_id' => $request->chatter_category_id,
            'user_id' => Auth::user()->id,
            'slug' => $slug,
            'color' => '#64274D',
        ];

        $category = Models::category()->find($request->chatter_category_id);
        if (!isset($category->slug)) {
            $category = Models::category()->first();
        }

        $discussion = Models::discussion()->create($new_discussion);

        $new_post = [
            'chatter_discussion_id' => $discussion->id,
            'user_id' => Auth::user()->id,
            'body' => '<p>Tu dyskutujemy o wpisie ' . $request->title . '</p>',
        ];

        if (config('chatter.editor') == 'simplemde'):
            $new_post['markdown'] = 1;
        endif;

        // add the user to automatically be notified when new posts are submitted
        $discussion->users()->attach(Auth::user()->id);

        $post = Models::post()->create($new_post);

        // add Post to Comment Relation
        $id = $request->input('id');
        $postToComments = new PostsToComments();
        $postToComments->post_id = $data['original']['id'];
        $postToComments->chatter_id = $discussion->id;
        $postToComments->save();

        return redirect()
            ->route("voyager.{$dataType->slug}.index")
            ->with([
                'message'    => "Successfully Updated {$dataType->display_name_singular}",
                'alert-type' => 'success',
            ]);
    }
}