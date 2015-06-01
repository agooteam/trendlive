<?php namespace TrendLive;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $table = 'categories';
    public static $unguarded = true;

    public static function get_first_category_id(){
        $category = Category::firstOrFail();
        return $category -> id;
    }

}
