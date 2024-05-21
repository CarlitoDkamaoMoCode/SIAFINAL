<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index() {
        $players = Player::orderBy('id')->get();
        return view('players', compact('players'));

    }


    // function generateCSV() {
    //     $officials = Offical::orderBy('id')->get();

    //     $filename = '../storage/officials.csv';

    //     $file = fopen($filename, 'w+');

    //     foreach($officials as $off) {
    //         fputcsv($file, [
    //             $off->id,
    //             $off->position,
    //             $off->name,
    //             $off->email,
    //             $off->phone_number,
    //         ]);
    //     }
    // }


    public function create(){
        $players = PLayer::all();
        return view('create', compact('players'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'jerseynumber' => 'required',
            'position' => 'required',

        ]);

        Player::create([
            'name' => $request->name,
            'jerseynumber' => $request->jerseynumber,
            'position' => $request->position,

        ]);

        return redirect()->route('players')->with('success', 'Players create successfully.');

    }

    public function generateCSV() {
        $players = Player::orderBy('id')->get();

        $filename = 'players.csv';

        $file = fopen('php://temp', 'w+');



        foreach($players as $play) {
            fputcsv($file, [
                $play->name,
                $play->jerseynumber,
                $play->position,

            ]);
        }

        rewind($file);

        $response = response(stream_get_contents($file), 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);

        fclose($file);

        return $response;
    }


    public function pdf(){
        $players = Player::orderBy('position')->get();
        $pdf = Pdf::loadView('player-list', compact('players'));

        return $pdf->download('player-list.pdf');
    }


    public function importCsv(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|file|mimes:csv,txt',
        ]);

        $file = $request->file('csv_file');

        $csvData = array_map('str_getcsv', file($file));

        foreach ($csvData as $row) {
            $name = $row[0];
            $jerseynumber = $row[1];
            $position = $row[2];


            Player::create([
                'name' => $name,
                'jerseynumber' => intval($jerseynumber),
                'position' => $position,

            ]);
        }

        return redirect()->route('players')->with('success', 'Players imported successfully.');
    }


    // public function show($id)
    // {
    //     $offical = Offical::findOrFail($id);
    //     return view('offical-show', compact('offical'));
    // }





}
