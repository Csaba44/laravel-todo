<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Todo;

Route::get('/', function () {
    return view('home');
});

Route::post("/formsubmitted", function (Request $request) {
    $validated = $request->validate([
        "todoTitle" => "required|min:1|max:70",
    ]);

    $todoTitle = $request->input("todoTitle");

    Todo::create([
        "title" => $validated["todoTitle"]
    ]);
    return redirect("/")->with("success", "Todo created.");
})->name("formsubmitted");