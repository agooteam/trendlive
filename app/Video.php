<?php namespace TrendLive;

use Illuminate\Database\Eloquent\Model;

class Video extends Model {

    protected $table = 'videos';
    public static $unguarded = true;

    public static function save_video($data){
        $video =  Video::create($data);
        return $video;
    }

    public static function get_video($collection_id){
        return $video =  Video::where('collection_id',$collection_id)->get();
    }

    public static function get_video_by_id($video_id){
        $video = Video::where('id',$video_id)->firstOrFail();
        return $video;
    }

    public static function update_video($video_id,$data){
        Video::where('id',$video_id)->update($data);
    }

    public static function delete_video($video_id){
        Video::where('id',$video_id) -> delete();
    }

}
