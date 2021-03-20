<?php

namespace App\Traits;

trait SelfReferential
{
    protected $parentColumn = 'parent_id';

    public function parent()
    {
        return $this->belongsTo(static::class);
    }

    public function children()
    {
        return $this->hasMany(static::class, $this->parentColumn);
    }

    public function recurseChildren()
    {
        return $this->children()->with('recurseChildren');
    }
}
