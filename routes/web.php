<?php

use Illuminate\Support\Facades\Route;
use App\Comment;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/comments/{comment}/edit', function (Comment $comment) {
    return view('comments.edit', ['comment' => $comment]);
});

Route::patch('/comments/{comment}', function (Comment $comment) {
    $comment->update(
        request()->validate(['body' => 'required|string'])
    );

    return redirect("/comments/{$comment->id}/edit");
});

Route::delete('/comments/{comment}', function (Comment $comment) {
    // authorize the delete

    $comment->delete();

    return redirect('/');
});
