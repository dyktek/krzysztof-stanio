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



class PostController extends Controller
{

    //wyswietlanie 3 artykulow z bloga na stronie glownej i absolwentow (index)
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->take(3)->get();
        $graduates = Graduates::inRandomOrder()->take(3)->get();
        return view('index', ['posts' => $posts, 'graduates' => $graduates]);
    }

    // wyswietlanie artykulow na podstronie blog
    public function blog_index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(2);
        $categories = Categories::all();
        $postModel = new Post();
        $postsByDates = $postModel->archive();

        return view('blog', ['posts' => $posts, 'categories' => $categories,
            'postsByDates' => $postsByDates]);
    }



    //wyswietlanie notek po id
    public function byEntry($slug)
    {
        Carbon::setLocale('pl');

        $posts = Post::where('slug', $slug)->first();

        $categories = Categories::all();

        $postsId= Post::select('id')->where('slug', $slug)->first();

        $comments = Comments::where('posts_id', $postsId['id'])->orderBy('id', 'ASC')->get();

//        $postsByDates = Post::orderBy('created_at', 'DESC')->get();

        $postModel = new Post();
         $postsByDates = $postModel->archive();

        //$postsByDates = json_decode($postsByDates, true);

        $commentsNumber = count($comments);

        $commentsTmp = [];

        foreach($comments as $comment) {

            if(
                $comment['parent'] == 0
            ) {
                $commentsTmp[$comment['id']]['main'] = $comment;
            }

            if(
                $comment['parent'] != 0
            ) {
                $commentsTmp[$comment['parent']]['child'][] = $comment;
            }


        }

        $fiveLastPosts = Post::orderBy('id', 'desc')->take(5)->get();


        return view('blog_notka', [
            'posts' => $posts,
            'categories' => $categories,
            'comments' => $commentsTmp,
            'postsByDates' => $postsByDates,
            'commentsNumber' => $commentsNumber,
            'fiveLastPosts' => $fiveLastPosts,
        ]);



    }

    //wyswietlanie notek po kategorii
    public function byCategory($name)
    {
        $categories = Categories::all();

        $categoriesModel = new Categories();
        $postsByCategories = $categoriesModel->categories($name);

        $postModel = new Post();
        $postsByDates = $postModel->archive();

        $fiveLastPosts = Post::orderBy('id', 'desc')->take(5)->get();

        return view('blog_kategoria', [
            'posts' => $postsByCategories,
            'categories' => $categories,
            'postsByDates' => $postsByDates,
            'fiveLastPosts' => $fiveLastPosts,
            'name' => $name,
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


        return view('blog_archiwum', ['posts' => $posts,
            'categories' => $categories,
            'postsByDates' => $postsByDates,
            'fiveLastPosts' => $fiveLastPosts,
        ]);
    }








//    public function addcomments($id)
//    {
//        $categories = Categories::all();
//        return view('addcomments', compact('categories', 'id'));
//
//    }
//zapisywanie komentarzy
    public function store(CreateCommentRequest $commentRequest, $posts){

        $comment = $commentRequest->input('comment_id');


        if(is_numeric($comment)){

            $id = $commentRequest->input('post_id');
            $postsSlug= Post::select('slug')->where('id', $id)->first();
            $slug = $postsSlug['slug'];


            $anscomment = new Comments();
            $anscomment->comment = $commentRequest->input('comment');
            $anscomment->nick = $commentRequest->input('nick');
            $anscomment->posts_id = $posts;
            $anscomment->parent = $commentRequest->input('comment_id');
            $anscomment->save();

<<<<<<< HEAD
            Session::flash('message', 'Komentarz czeka na publikację.');
            return Redirect::to(URL::previous() . "#back");

//            return redirect()->route('posts', compact('id'));
=======
            Session::flash('message', 'Komentarz został zapisany');

            return redirect()->route('posts', compact('slug'));
>>>>>>> 25b5cfdc03b422ffa2cf9d9d3f6c22b899dc6fb5

        } else {
            $id = $commentRequest->input('post_id');
            $postsSlug= Post::select('slug')->where('id', $id)->first();
            $slug = $postsSlug['slug'];


            $comment = new Comments();
            $comment->comment = $commentRequest->input('comment');
            $comment->nick = $commentRequest->input('nick');
            $comment->posts_id = $commentRequest->input('post_id');
            $comment->parent = 0;

            $comment->save();

            Session::flash('message', 'Komentarz został zapisany');

<<<<<<< HEAD
//            return redirect()->route('posts', compact('id'));
            return Redirect::to(URL::previous() . "#back");
=======
            return redirect()->route('posts', compact('slug'));
>>>>>>> 25b5cfdc03b422ffa2cf9d9d3f6c22b899dc6fb5

        }







//        $id = $commentRequest->input('post_id');
//        $anscomment = new Comments();
//        $anscomment->comment = $commentRequest->input('comment');
//        $anscomment->nick = $commentRequest->input('nick');
//        $anscomment->posts_id = $commentRequest->input('posts_id');
//        $anscomment->parent = intval($commentId);
//        $anscomment->save();
//
//        Session::flash('message', 'Komentarz czeka na publikację.');
//
//        return redirect()->route('posts', compact('id'));



    }

    public function getLogout()
    {
        Auth::logout();

        Session::flush();

        return redirect('/');
    }

}