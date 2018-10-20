<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Answer;
use App\Question;
use App\QuestionVote;
use App\Tag;

class ForumController extends Controller
{
    //
    public function index()
    {
    	$questions = Question::all();

    	return view('forum.index',compact('questions'));
    }

    //display forum question by id
    public function showQuestion($id)
    {

        $question = Question::where('id', $id)
                             ->first();
        $answers = Answer::where('question_id', $id)
                             ->orderBy('created_at','desc')
                             ->get();

        return view('forum.forum_question',compact('question','answers'));
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
            'question' => 'required'
        ]);

        $questions = Question::all();
        Question::create([
           'question' => $request['question'],
           'user_id' => Auth::user()->id
        ]);
       
        return redirect()->route('forum.index',compact('questions'));
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
   

}
