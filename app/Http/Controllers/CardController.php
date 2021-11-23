<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Activity;
use App\Models\User;
use App\Models\Information;
use App\Models\Card;

class CardController extends Controller
{
    public function index()
    {    
        $id = Auth::id();
        $cards = Card::where('id_usuario', $id)->get();

        return view('Cards.index', compact('cards'));
    }

    public function store(Request $request)
    {
        $card = Card::create($request->all());

        return redirect()->back();
    }

    public function update(Request $request)
    {
        $card = Card::find($request->id);

        if($card)
        {
            if($card->update($request->all()))
            {
                return redirect()->back();
            }
        }

        return redirect()->back();
    }
    
    public function getCardsByTheme($id)
    {
        $cards = Card::where('id_information', $id);
      
        if(count($cards) == 0)
        {
            return response()->json([
                'message' => 'Sin resultados.',
            ], 200);
        }
        else
        {
            return response()->json([
                'message' => 'Busqueda Exitosa',
                'articulos' => $cards,
            ], 200);
        }
    }

    public function randomCard()
    {
        $id = Auth::id();
        $cards = Card::where('id_usuario', $id)->get();
        $r = rand(0, count($cards)-1);

        return response()->json([
            'message' => 'Busqueda Exitosa',
            'carta' => $cards[$r],
        ], 200);
    }

    public function destroy($id)
    {
        Card::destroy($id);
      
        return view('myCards');
    }
}
