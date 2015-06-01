<?php namespace TrendLive;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model {
    protected $table = 'collections';
    public static $unguarded = true;

    public static function save_collection($data){
        $collection =  Collection::create($data);
        return $collection -> id;
    }

    public static function get_collection($collection_id){
        $collection = Collection::where('id',$collection_id)->firstOrFail();
        return $collection;
    }

    public static function get_collection_by_category($category_id,$pagination){
        $collections = Collection::where('category_id',$category_id)-> paginate($pagination);
        return $collections;
    }

    public static  function update_collection($collection_id,$data){
        Collection::where('id',$collection_id)->update($data);
    }

    public static function delete_collection($collection_id){
        Collection::where('id',$collection_id) -> delete();
    }

    public static function get_my_collection($user_id,$pagination){
       $collection = Collection::where('user_id',$user_id)->paginate($pagination);
       return $collection;
    }

}
