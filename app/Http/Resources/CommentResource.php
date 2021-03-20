<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

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
            'created_at' => Carbon::parse($this->created_at)->format('Y-m-d H:i:s'),
            'sub_comments' => CommentResource::collection($this->whenLoaded('recurseChildren'))
        ];
    }
}
