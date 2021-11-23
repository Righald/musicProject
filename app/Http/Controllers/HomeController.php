<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Score;
use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function update()
    {
        $id = Auth::id();
        $user = User::findOrFail($id);
        //dd($user);
        
        return view('auth.update', compact ('user'));
    }

    public function storeUpdate(Request $request)
    {

        $user = User::find(Auth::id());
        $email = $request->input('email');
        $search = User::where('email','=', $email )->get();

        if(count($search)>0 && $search[0]->email!=$user->email)
        {
            return Redirect::to('/')->with('message', 'Email en uso, Favor de utilizar otro.');
        }
        else
        {
            $user->nickname = $request['nickname'];
            $user->nombres = $request['nombres'];
            $user->apellidos = $request['apellidos'];
            $user->email = $request['email'];
            $user->password = Hash::make($request['password']);

            $user->save();

            return Redirect::to('/')->with('message', '¡Actualización Concluida!');
        }
    }

    public function deleteUser()
    {
        $id = Auth::id();
        
        $scores = Score::where('id_usuario','=', $id)->get();

        foreach ($scores as $key) 
        {
            $key->delete();        
        }

        Auth::logout();
        $user = User::find($id);
        $user->delete();

        return Redirect::to('/')->with('message', 'Cuenta eliminada');
    }
}
