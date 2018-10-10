<?php

namespace App\Http\Controllers\CustomController;

use App\Http\Resources\QuestionResource;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class QuestionController extends Controller
{
    public  function  getPathAttribute(){
        return asset("api/question/$this->slug");
    }

    public function index()
    {
        return QuestionResource::collection(Question::latest()->get());
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
        Question::create($request->all());
        return \response(null,Response::HTTP_CREATED);

    }


    public function show( Question $question)
    {

        return  new QuestionResource($question);
    }

    public function edit(Question $question)
    {
      return $question;
    }


    public function update(Request $request, Question $question)
    {
       $question->update($request->all());
       return \response(null,Response::HTTP_CREATED);
    }


    public function destroy(Question $question)
    {
         $question->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
