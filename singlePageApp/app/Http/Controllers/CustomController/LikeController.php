<?php

namespace App\Http\Controllers\CustomController;

use App\Models\Like;
use App\Models\Question;
use App\Models\Reply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LikeController extends Controller
{
    public function likeReply( Reply $reply){
   $reply->likes()->create([
//       'user_id'=>auth()->id();
   'user_id'=>rand(1,10),
   ]);
    }
    public  function unLikeReply(Reply $reply){

    }
    public  function likeQuestion(Question $question){

        $question->likes()->create([
            'question_id'=>$question->id,
        ]);
    }
    public function unLikeQuestion(Question $question){

    }
}
