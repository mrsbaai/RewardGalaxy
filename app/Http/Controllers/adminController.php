<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function addReward(){
        return "test";
    }



    public function test(){
        $this->downloadThumbnail("iphone6", "https://ssli.ebayimg.com/images/g/tLUAAOSw0GJZpxi4/s-l640.jpg");
        return "ok f takoki";
    }

    public function downloadThumbnail ($offer_name, $url){
        $name = $this->sluggable($offer_name) . '.jpg';
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
