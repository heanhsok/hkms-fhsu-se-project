<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Answer;
use App\Question;
use App\QuestionVote;
use App\Tag;
use App\QuestionTag;
use App\User;
use Carbon\Carbon;

class ForumController extends Controller
{
    //
    public function index()
    {
    	$questions = Question::all();
        $tags      = Tag::all();

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

    	return view('forum.forum-home',compact('questionArr','questionUpvoteArr','questionDownvoteArr','questionAnswerArr','timeArr','tags','questionTagArr'));
    }

    //display forum question by id
    public function showQuestion($id)
    {
        $tags = Tag::where('status',1)->get();
        $question = Question::find($id);
        $answers = Answer::where('question_id', $id)
                             ->orderBy('created_at','desc')
                             ->get();
        $questionUpvotes = QuestionVote::where('question_id',$question->id)
                                                ->where('vote',1)->get();
        $questionDownvotes = QuestionVote::where('question_id',$question->id)
                                            ->where('vote',0)->get();
        $questionAnswers = Answer::where('question_id',$question->id)->get();
        $time = $question->created_at->diffForHumans();
        $questionTags    = QuestionTag::where('question_id',$question->id)->get();


        return view('forum.forum-question-detail',compact('question','answers','questionUpvotes','questionDownvotes','questionAnswers','time','questionTags','tags'));
    }

    //store forum answer
    public function storeAnswer(Request $request, $p_question_id)
    {
        
        $this->validate($request, [
            'answer' => 'required'
        ]);

        $userID = Auth::id();
        $question_id = $p_question_id;

        $answer = Answer::create([
             'answer' => $request['answer'],
             'question_id' => $question_id,
             'user_id' => Auth::user()->id
        ]);

        return redirect()->route('forum.showQuestion', [$p_question_id]);

    }

    //upvote / downvote forum question
    public function questionVote(Request $request)
    {
        
        return 1;
        $question_id = $request['questionId'];
        $is_upvote = $request['isUpVote'] === 'true';
        $update = false;
        $question = Question::find($question_id);
        if (!$question) {
            return null;
        }
        $user = Auth::user();
        $questionVote = $user->questionVotes()->where('question_id', $question_id)->first();
        if ($questionVote) {
            $already_vote = $questionVote->vote;
            $update = true;
            if ($already_vote == $is_upvote) {
                $questionVote->delete();
                return null;
            }
        } else {
            $questionVote = new QuestionVote();
        }
        $questionVote->vote = $is_upvote;
        $questionVote->user_id = $user->id;
        $questionVote->question_id = $question->id;
        if ($update) {
            $questionVote->update();
        } else {
            $questionVote->save();
        }
        return null;
    }

    //display a page to create new forum question
    public function showQuestionForm()
    {
        $tags = Tag::all();

        return view('forum.forum_question_create',compact('tags'));
    }

    //stores forum question
    public function storeQuestion(Request $request)
    { 
        $this->validate($request, [
            'header' => 'required',
        ]);

        if(Auth::user()) {

            $questionData;
            
            $questionData['header']       = $request['header'];
            $questionData['description']  = $request['description'];
            $questionData['user_id']      = Auth::user()->id;
            $questionData['created_at']   = Carbon::now();
            $questionData['updated_at']   = Carbon::now();
           
            $questionCreate = Question::create($questionData);

            foreach($request->tags as $index => $tag) {
                $questionTagData['question_id'] = $questionCreate->id ;
                $questionTagData['tag_id']      = $tag;
                
                QuestionTag::create($questionTagData);

            }
           
        return redirect()->route('forum.index',compact('questions'));

        } else {

            return redirect()->route('login');            
        }

      
    }


     public function deleteQuestion($question_id)
    {
        $question = Question::where('id', $question_id)->first();
        if (Auth::user() != $question->user) {
            return redirect()->back();
        }
        $question->delete();
        return redirect()->route('forum.index')->with(['message' => 'Successfully deleted!']);
    }

    public function editQuestion(Request $request)
    {
        $this->validate($request, [
            'question' => 'required'
        ]);
        $question = Question::find($request['questionId']);
        if (Auth::user() != $question->user) {
            return redirect()->back();
        }
        $question->question = $request['question'];
        $question->update();
        return response()->json(['new_question' => $question->question], 200);
    }

    public function showPostByTags($tag_id) 
    {
        $questionByTags = QuestionTag::where('question_tags.tag_id','=',$tag_id)->get();
        $tags      = Tag::all();

        $questionArr         = [];
        $questionUpvoteArr   = [];
        $questionDownvoteArr = [];
        $questionAnswerArr   = [];
        $timeArr             = [];
        $questionTagArr      = [];
        $userArr             = [];

        foreach( $questionByTags as $questionByTag ) {

            $questionUpvotes = QuestionVote::where('question_id',$questionByTag->question->id)
                                                ->where('vote',1)->get();
            $questionDownvotes = QuestionVote::where('question_id',$questionByTag->question->id)
                                                ->where('vote',0)->get();
            $questionAnswers = Answer::where('question_id',$questionByTag->question->id)->get();
            $time = $questionByTag->question->created_at->diffForHumans();
            $questionTags    = QuestionTag::where('question_id',$questionByTag->question->id)->get();
            $user            = User::where('id',$questionByTag->question->user->id)->first();

            $questionArr[]         = $questionByTag;
            $questionUpvoteArr[]   = $questionUpvotes;
            $questionDownvoteArr[] = $questionDownvotes;
            $questionAnswerArr[]   = $questionAnswers;
            $timeArr[]             = $time;
            $questionTagArr[]      = $questionTags;
            $userArr[]             = $user;
        
        }

        return view('forum.forum_post_by_tags',compact('questionArr','questionUpvoteArr','questionDownvoteArr','questionAnswerArr','timeArr','tags','questionTagArr','userArr'));
    }
   

}
