<?php namespace TrendLive\Http\Requests;

use TrendLive\Http\Requests\Request;

class SaveVideoFormRequest extends Request {

    public function __construct() {
        $this->validator = app('validator');
        $this->CheckYoutubeLink($this->validator);
    }

	public function authorize(){
		return true;
	}

	public function rules(){
		return [
            'video_name' => 'required|max:100',
            'youtube_link' => 'required|max:255|check_youtube_link'
		];
	}

    public function CheckYoutubeLink($validator) {
        $validator->extend('check_youtube_link', function($attribute, $value, $parameters) {
            $result= substr_count( $value , 'youtu');
            if($result == 0) return false;
            else return true;
        });
    }

}
