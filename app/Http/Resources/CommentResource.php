<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->user_name,
            'comment' => $this->comment,
            'parent_id' => $this->parent_id,
            'created_at' => $this->created_at,
            'sub_comments' => CommentResource::collection($this->whenLoaded('recurseChildren'))
        ];
    }
}
