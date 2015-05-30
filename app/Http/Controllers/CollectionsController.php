<?php namespace TrendLive\Http\Controllers;

use TrendLive\Http\Requests;
use TrendLive\Http\Controllers\Controller;
use Auth;
use TrendLive\Http\Requests\SaveCollectionFormRequest;
use Carbon\Carbon;
use File;
use Image;
use Illuminate\Http\Request;
use TrendLive\Category;
use TrendLive\Collection;

class CollectionsController extends Controller {

    public static function get_new_collection(){
        if(!Auth::check()) return redirect('/profile/login');
        $categories = Category::all();
        return  view('New_collection',compact('categories'));
    }

    public function post_new_collection(SaveCollectionFormRequest $request ){//сохранение нового курса
        if(!Auth::check()) return redirect('/profile/login');
        $data = $request->all();
        $collection_name = $data['collection_name'];//получаем название курса
        $description = $data['description'];//получаем описание курса
        $category_id = $data['category'];//получаем категорию курса
        $url = $request->url();//получаем путь
        $pos = strrpos($url, 'profile');//обрезаем
        $url = substr($url,0,$pos);//получаем домен + протокол
        $UploadPathImage = public_path().'/assets/temp/';//временный
        $image_url  = null;//может быть и не будет загружно фотографии
        if($request->hasFile('image')){
            $extension = $data['image']->getClientOriginalExtension();
            $time = Carbon::now();
            $time->toDateTimeString();
            $user_id = Auth::user()->id;
            $image_name = 'image_'.md5($user_id.'_'.$time).'.'.$extension;
            $new = $data['image']-> move($UploadPathImage, $image_name);
            $image_url = $url.'assets/temp/'.$image_name;
        }
        $data = [
            'category_id' => $category_id,
            'user_id' => Auth::user()->id,
            'collection_name' => $collection_name,
            'description' => $description,
            'image_url' => $image_url,
        ];
        $collection_id = Collection::save_collection($data);//сохраняем курс и получаем id
        return redirect('/profile/collection/edit/'.$collection_id);
    }

}
