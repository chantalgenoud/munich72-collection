<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{

    // Here the funciton for the details page
    public function history()
    {
        $history = History::findOrFail(1);
        return view('histories', ['histories' => $history]);
    }
}
