<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Resources\CommentCollection;
use App\Http\Resources\CommentResource;

class CommentService
{
    public function create(Request $data) : CommentResource
    {
        $comment = new Comment();
        $comment->user_name = $data->name;
        $comment->comment = $data->comment;

        if ($data->parent_id && $data->parent_id != 'false') {
            $comment->parent_id = $data->parent_id;
        }

        $comment->save();

        return new CommentResource($comment);
    }

    public function getAll() : CommentCollection
    {
        $comments = Comment::whereNull('parent_id')
            ->with([
                'recurseChildren' => function ($query) {
                    $query->orderByDesc('created_at');
                }
            ])
            ->orderByDesc('created_at')->get();

        return new CommentCollection($comments);
    }
}
