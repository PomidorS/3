<?php

namespace App\Models;

use App\Models\Models\Task;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{

    protected $fillable = [
        'name', 'type', 'extension', 'task_id'
    ];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
