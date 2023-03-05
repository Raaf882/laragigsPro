<?php

namespace App\Models;

class Listing {
    public static function all(){
        return 
        [
            'id' => 1 ,
            'title' => 'listing one' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Amet molestiae ducimus assumenda repudiandae pariatur repellat, libero nostrum corrupti incidunt, blanditiis saepe? 
            Obcaecati deserunt tempore officiis delectus nostrum iusto earum blanditiis?'
        ].
        [
            'id' => 2 ,
            'title' => 'listing two' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Amet molestiae ducimus assumenda repudiandae pariatur repellat, libero nostrum corrupti incidunt, blanditiis saepe? 
            Obcaecati deserunt tempore officiis delectus nostrum iusto earum blanditiis?'
        ];
    }


    public static function find($id){
        $listings = self::all();

       
    }
}



?>