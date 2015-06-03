<?php namespace TrendLive;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $table = 'categories';
    public static $unguarded = true;

    public static function get_first_category_id(){
        $category = Category::firstOrFail();
        return $category -> id;
    }

    public static function get_name($category_id){
        $category_name = Category::where('id',$category_id)-> pluck('category_name');
        return $category_name;
    }
}
