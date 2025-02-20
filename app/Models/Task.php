<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        "name",
        "video",
        "image",
        "description",
        "project_id",
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
