<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Todo;

Route::get("/", function () {
    $todos = Todo::all();
    return view("home", ["todos" => $todos]);
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

Route::delete("/deleteTodo", function (Request $request) {
    $validated = $request->validate([
        "deleteId" => "required",
    ]);

    $deleteId = $validated["deleteId"];

    Todo::destroy($deleteId);
    
    return redirect("/")->with("deleted", "Todo deleted.");
})->name("deleteTodo");

Route::put("/toggleTodo/{deleteId}", function (Request $request, $deleteId) {

    $todo = Todo::find($deleteId);
    $todo->isCompleted = !$todo->isCompleted;
    $todo->save();

    
    return redirect("/")->with("updated", "Todo updated.");
})->name("toggleTodo");