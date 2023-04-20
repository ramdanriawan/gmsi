<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todos extends Model
{

    protected $table = 'todos';
    protected $guarded = [];

    public $timestamps = false;

    public function activity_group() {
        return $this->belongsTo(ActivityGroups::class, "activity_group_id", "id");
    }
}
