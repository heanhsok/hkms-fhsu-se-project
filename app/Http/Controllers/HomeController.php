<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\QuestionVote;
use App\Answer;
use App\QuestionTag;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $questions = Question::all();

        $questionArr         = [];
        $questionUpvoteArr   = [];
        $questionDownvoteArr = [];
        $questionAnswerArr   = [];
        $timeArr             = [];
        $questionTagArr      = [];


        foreach( $questions as $question ) {

            $questionUpvotes = QuestionVote::where('question_id',$question->id)
                                                ->where('vote',1)->get();
            $questionDownvotes = QuestionVote::where('question_id',$question->id)
                                                ->where('vote',0)->get();
            $questionAnswers = Answer::where('question_id',$question->id)->get();
            $time = $question->created_at->diffForHumans();
            $questionTags    = QuestionTag::where('question_id',$question->id)->get();

            $questionArr[]         = $question;
            $questionUpvoteArr[]   = $questionUpvotes;
            $questionDownvoteArr[] = $questionDownvotes;
            $questionAnswerArr[]   = $questionAnswers;
            $timeArr[]             = $time;
            $questionTagArr[]      = $questionTags;
        }

        return view('user.home',compact('questionArr','questionUpvoteArr','questionDownvoteArr','questionAnswerArr','timeArr','questionTagArr'));
    }

    public function home(){
    
    }

    public function about(){
    
    }

    public function contact(){
    
    }
}
