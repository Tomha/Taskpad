<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\User;

class Task extends Model
{

	protected $fillable = [
        'user_id', 'title', 'description',
    ];

    public function scopeIncomplete() {
		return $this::where('completed', 'false')->get();
	}

	public function user() {
		return $this->belongsTo(User::class);
	}

}
