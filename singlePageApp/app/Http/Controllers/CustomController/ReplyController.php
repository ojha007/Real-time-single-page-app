<?php

namespace App\Http\Controllers\CustomController;

use App\Models\Question;
use App\Models\Reply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class ReplyController extends Controller
{

    public function index( Question $question)
    {
        return $question->replies()->get();
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show( Question $question,Reply $reply)
    {
        return $reply;
    }


    public function edit(Reply $reply)
    {
        //
    }


    public function update(Request $request, Reply $reply)
    {
        $reply->update($request->all());
        return \response("Updated",Response::HTTP_CREATED);
    }


    public function destroy(Reply $reply)
    {
        $reply->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
