<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResponseSeek extends Model
{
    protected $table = "response_seek";
    protected $fillable = ["status", "seek_id", "prevision", "conclusion", "description"];
}
