<?php namespace TrendLive;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model {
    protected $table = 'collections';
    public static $unguarded = true;

    public static function save_collection($data){
        $collection =  Collection::create($data);
        return $collection -> id;
    }
}
