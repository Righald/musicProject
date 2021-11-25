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
        $card = new Card;
        $card->titulo = $request->input('titulo');
        $card->anotacion = $request->input('anotacion');
        $card->id_information = 1;
        $card->id_usuario = Auth::id();

        if($card->save())
        {
            return response()->json([
                'message' => 'Carta creada exitosamente.',
            ], 200);
        }

        return response()->json([
            'message' => 'Error al crear carta.',
        ], 200);
    }

    public function update($id, Request $request)
    {
        $card = Card::find($id);

        if($card)
        {
            if(isset($card))
            {
                $card->titulo = $request->input('titulo');
                $card->anotacion = $request->input('anotacion');
                $card->id_information = 1;
                $card->id_usuario = Auth::id();
                $card->save();

                return response()->json([
                    'message' => 'Carta modificada exitosamente.',
                ], 200);
            }
        }

        return response()->json([
            'message' => 'Error, carta no modificada..',
        ], 200);
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
      
        return response()->json([
            'message' => 'Borradingui',
            'carta' => $id,
        ], 200);;
    }

    public function getCard($id)
    {
        $card = Card::where('id', $id)->get();

        return response()->json([
            'message' => 'Busqueda Exitosa',
            'carta' => $card,
        ], 200);
    }
}
