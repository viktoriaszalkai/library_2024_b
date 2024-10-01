<?php

namespace App\Http\Controllers;

use App\Models\Lending;
use Illuminate\Http\Request;

class LendingController extends Controller
{
    public function index() //alapfüggvények amiket minden controllerben használunk
    {
        return Lending::all(); //select * from Lendings
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //egy rekord létrehozása
                                            //modellnek megfelelő példány kitöltése az összes kérésnek megfelelően

    {
        $record = new Lending();
        $record->fill($request->all()); // létrehozunk egyúj rekordot és utána kitöltjük az összeset
        $record->save(); //elmentjük a módosításokat
    }

    /**
     * Display the specified resource.
     */
    public function show(string $user_id, $copy_id, $start)   {

        $lending = Lending::where('user_id', $user_id)   //paramétereket megnézi, hopgy megfelelnek e a különböző mezőknek
        ->where('copy_id', $copy_id)
        ->where('start', $start)
        ->get();
        return $lending[0]; //lekérdezi, hogy létezik e ilyen rekord, visszatér egy listával, aminek az egytlen eleme lesz az a rekord
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $user_id, $copy_id, $start) //ahhoz hogy módosítani tudjunk valamit meg kell adni paraméterekkel, hogy mit módosítanánk
    {
        $record = $this->show($user_id, $copy_id, $start);
        $record->fill($request->all());  //azt a rekordot átírja?
        $record->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($user_id, $copy_id, $start)
    {
        $this->show($user_id, $copy_id, $start)->delete(); //kitörli a megadott paraméterekkel rendelkező rekordot
    }
}
