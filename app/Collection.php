<?php namespace TrendLive;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model {
    protected $table = 'collections';
    public static $unguarded = true;

    public static function save_collection($data){
        $collection =  Collection::create($data);
        return $collection -> id;
    }

    public static  function update_collection($collection_id,$data){
        Collection::where('id',$collection_id)->update($data);
    }

    public static function delete_collection($collection_id){
        Collection::where('id',$collection_id) -> delete();
    }


}
