<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datas extends Model
{
    // use HasFactory;
    private static $Datas = [
        [
            'Title' => 'Joke Father',
            'Slug' => 'joke-father',
            'Desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dolores distinctio veritatis ullam. Inventore repellat explicabo nisi, nobis corporis hic fugiat ipsa velit perferendis error quibusdam et ab distinctio sit!'
        ],
        [
            'Title' => 'Joke People',
            'Slug' => 'joke-people',
            'Desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dolores distinctio veritatis ullam. Inventore repellat explicabo nisi, nobis corporis hic fugiat ipsa velit perferendis error quibusdam et ab distinctio sit!'
        ],
        [
            'Title' => 'Joke Friends',
            'Slug' => 'joke-friends',
            'Desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dolores distinctio veritatis ullam. Inventore repellat explicabo nisi, nobis corporis hic fugiat ipsa velit perferendis error quibusdam et ab distinctio sit!'
        ],
        [
            'Title' => 'Joke Mother',
            'Slug' => 'joke-mother',
            'Desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dolores distinctio veritatis ullam. Inventore repellat explicabo nisi, nobis corporis hic fugiat ipsa velit perferendis error quibusdam et ab distinctio sit!'
        ],
    ];

    public static function all(){
        return self::$Datas;
    }
}
