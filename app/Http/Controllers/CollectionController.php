<?php namespace TrendLive\Http\Controllers;

use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Request;
use TrendLive\Category;
use TrendLive\Collection;
use TrendLive\Http\Controllers\Controller;
use TrendLive\Video;

class CollectionController extends Controller {

    public function index($category_id = null ) {
        if($category_id != null && !ctype_digit($category_id)) abort(404);
        $pagination = 12;
        $page = 1;
        return $url = Request::url();
        if(isset($_GET['page'])) $page = $_GET['page'];
        else if(substr_count( $url , '?') != 0 ) abort(404);
        if($category_id == null) $category_id = Category::get_first_category_id();
        $categories = Category::all();
        $collections = Collection::get_collection_by_category($category_id,$pagination);
        if($page < 1 || ($page > $collections-> lastPage() && $collections-> lastPage()!=0) ) abort(404);
        foreach($collections as $collection) $collection-> collection_name = mb_strimwidth($collection-> collection_name, 0, 50, "...");
        reset($collections);
        return view('Collection',compact('collections','categories','category_id'));
    }

    public function view_collection($collection_id = null ){
        if($collection_id != null && !ctype_digit($collection_id)) abort(404);
        //проверяем существование видео и что в нем есть видео
        $collection = Collection::get_collection($collection_id);
        if(!$collection instanceof Collection) abort(404);
        if(!$collection-> count_videos > 0)return redirect('/catalog/');
        $videos = Video::get_video($collection_id);
        $categories = Category::all();
        $vk = array(
            'ClientID' => $_ENV['VK_ClientID'],
            'VK_RedirectURL' => $_ENV['VK_RedirectURL']
        );
        return view('View_collection',compact('videos','categories','collection','vk'));
    }
}