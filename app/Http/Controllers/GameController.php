<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Score;
use App\Models\Activity;

class GameController extends Controller
{
        public function dashboard()
    {
        return view('dashboard');
    }

    public function invaders()
    {
        return view('Games.invaders');
    }

    public function quizz()
    {
        $questions = Question::all();
        
        return view('Games.quizz', compact('questions'));
    }

    public function memorama()
    {
        return view('Games.memorama');
    }

    public function score(Request $request)
    {
        //dd($request);
        $score = new Score;

        $score->puntaje = $request->input('puntaje');
        $score->tiempo = $request->input('tiempo');
        $score->id_actividad = $request->input('id_actividad');
        $score->id_usuario = $request->input('id_usuario');
        $score->save();

        sleep(5);
        return redirect()->route('index');
    }

    public function scoreTable()
    {
         $score1 = Score::where('id_actividad','=','1')->orderBy('puntaje', 'desc')->limit(10)->get();
         $score2 = Score::where('id_actividad','=','2')->orderBy('puntaje', 'desc')->limit(10)->get();
         $score3 = Score::where('id_actividad','=','3')->orderBy('puntaje', 'desc')->limit(10)->get();
         $user = User::all();
         $activities = Activity::all();

         //dd($score1);

         return view('profile', compact('score1','score2','score3', 'user', 'activities'));
    }

}
