<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Reward;

class adminController extends Controller
{
    public function addReward(){

        $random = str_shuffle(mt_rand(10000, 99999));

        $title = Input::get('title');
        $tag = Input::get('tag') . $random;
        $short_description = Input::get('short_description');
        $long_desctiption = Input::get('long_description');

        $coins = Input::get('coins');

        $thumbnail = Input::get('thumbnail');
        $thumbnail =  $this->downloadThumbnail($title, $thumbnail);

        Reward::create([
            'title' => $title,
            'tag' => $tag,
            'short_description' => $short_description,
            'long_description' => $long_desctiption,
            'coins' => $coins,
            'thumbnail' => $thumbnail,
        ]);

    }



    public function test(){
        return "";

    }

    public function downloadThumbnail ($title, $url){
        $name = $this->sluggable($title) . '.jpg';
        $path = public_path() . "/img/rewards/". $name;

        if (copy($url, $path)){
            return $name;
        }else{
            return  "thumb.png";
        }

    }


    private function sluggable($str) {

        $before = array(
            'àáâãäåòóôõöøèéêëðçìíîïùúûüñšž',
            '/[^a-z0-9\s]/',
            array('/\s/', '/--+/', '/---+/')
        );

        $after = array(
            'aaaaaaooooooeeeeeciiiiuuuunsz',
            '',
            '-'
        );

        $str = strtolower($str);
        $str = strtr($str, $before[0], $after[0]);
        $str = preg_replace($before[1], $after[1], $str);
        $str = trim($str);
        $str = preg_replace($before[2], $after[2], $str);

        return $str;
    }

}
