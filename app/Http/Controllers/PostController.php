<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Post;
use App\Graduates;
use App\Categories;
use App\Comments;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use DevDojo\Chatter\Events\ChatterAfterNewResponse;
use DevDojo\Chatter\Events\ChatterBeforeNewResponse;
use DevDojo\Chatter\Mail\ChatterDiscussionUpdated;
use DevDojo\Chatter\Models\Models;
use Event;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Support\Facades\Mail;
use Validator;

class PostController extends Controller
{
    //wyswietlanie 3 artykulow z bloga na stronie glownej i absolwentow (index)
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->take(3)->get();

        $graduates = Graduates::inRandomOrder()->take(4)->get();

        return view('index',
            ['posts' => $posts,
            'graduates' => $graduates]);
    }

    // wyswietlanie artykulow na podstronie blog
    public function blog_index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(2);

        $categories = Categories::all();

        $postModel = new Post();
        $postsByDates = $postModel->archive();

        return view('blog', ['posts' => $posts,
            'categories' => $categories,
            'postsByDates' => $postsByDates]);
    }

    //wyswietlanie notek po id
    public function byEntry($slug)
    {
        Carbon::setLocale('pl');

        $posts = Post::where('slug', $slug)->first();

        $categories = Categories::all();

        $postModel = new Post();
        $postsByDates = $postModel->archive();

        $fiveLastPosts = Post::orderBy('id', 'desc')->take(5)->get();

        $discussion = Models::discussion()->where('title', '=', $posts['title'])->first();

        if ($discussion) {
            $chatterPosts = Models::post()->with('user')->where('chatter_discussion_id', '=', $discussion->id)->orderBy('created_at', 'ASC')->take(4)->get();
        }

        if (!$discussion) {
            return view('blog_notka',
                ['posts' => $posts,
                    'categories' => $categories,
                    'postsByDates' => $postsByDates,
                    'fiveLastPosts' => $fiveLastPosts,

                ]);} else { return view('blog_notka',
                ['posts' => $posts,
                    'categories' => $categories,
                    'postsByDates' => $postsByDates,
                    'fiveLastPosts' => $fiveLastPosts,
                    'discussion' => $discussion,
                    'chatterPosts' => $chatterPosts,
                ]);
        }
    }

    //wyswietlanie notek po kategorii
    public function byCategory($slug)
    {

        $categories = Categories::all();

        $currentCategory = Categories::whereSlug($slug)->pluck('name');

        $categoriesModel = new Categories();

        $postsByCategories = $categoriesModel->categories($slug);



        $postModel = new Post();
        $postsByDates = $postModel->archive();

        $fiveLastPosts = Post::orderBy('id', 'desc')->take(5)->get();

        return view('blog_kategoria',[
            'posts' => $postsByCategories,
            'currentCategory' => $currentCategory[0],
            'categories' => $categories,
            'postsByDates' => $postsByDates,
            'fiveLastPosts' => $fiveLastPosts,
            'slug' => $slug
        ]);
    }

    //wyswietlanie notek po dacie
    public function byDate($year, $month)
    {
        $posts = Post::whereYear('created_at', '=', $year)
            ->whereMonth('created_at', '=', $month)
            ->orderBy('id', 'desc')
            ->get();

        $categories = Categories::all();

        $postModel = new Post();
        $postsByDates = $postModel->archive();
        $postsByDates = json_decode($postsByDates, true);

        $fiveLastPosts = Post::orderBy('id', 'desc')->take(5)->get();

        return view('blog_archiwum',
            ['posts' => $posts,
            'categories' => $categories,
            'postsByDates' => $postsByDates,
            'fiveLastPosts' => $fiveLastPosts]);
    }

    // TODO: remove:
    //zapisywanie komentarzy
    public function store(CreateCommentRequest $commentRequest, $posts)
    {
        $comment = $commentRequest->input('comment_id');

        if (is_numeric($comment)) {
            $id = $commentRequest->input('post_id');
            $postsSlug = Post::select('slug')->where('id', $id)->first();
            $slug = $postsSlug['slug'];

            $anscomment = new Comments();
            $anscomment->comment = $commentRequest->input('comment');
            $anscomment->nick = $commentRequest->input('nick');
            $anscomment->posts_id = $posts;
            $anscomment->parent = $commentRequest->input('comment_id');
            $anscomment->save();

            Session::flash('message', 'Komentarz został zapisany');

            return redirect()->route('posts', compact('slug'));

        } else {
            $id = $commentRequest->input('post_id');

            $postsSlug = Post::select('slug')->where('id', $id)->first();

            $slug = $postsSlug['slug'];

            $comment = new Comments();
            $comment->comment = $commentRequest->input('comment');
            $comment->nick = $commentRequest->input('nick');
            $comment->posts_id = $commentRequest->input('post_id');
            $comment->parent = 0;
            $comment->save();

            Session::flash('message', 'Komentarz został zapisany');
            return redirect()->route('posts', compact('slug'));

        }
    }

    public function getLogout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}