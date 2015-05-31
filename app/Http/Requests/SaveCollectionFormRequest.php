<?php namespace TrendLive\Http\Requests;

use TrendLive\Http\Requests\Request;

class SaveCollectionFormRequest extends Request {

    public function authorize(){
        return true;
    }
    public function rules(){
        return [
            'description' => 'required|max:400',
            'collection_name' => 'required|max:150',
            'image' => 'mimes:jpeg,jpg,png| size: 5120',
            'category' => 'required|numeric',
        ];
    }

}
