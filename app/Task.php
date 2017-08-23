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

    public function scopeIncomplete($query) {
		return $this::where('completed', 0)->get();
	}
	
	public function scopeComplete($query) {
		return $this::where('completed', 1)->get();
	}

	public function scopeCreatedBefore($query, $time) {
		return $this::where('created_at', '<', $time)->get();
	}

	public function scopeCompletedBefore($query, $time) {
		return $this::where('completed_at', '<', $time)->get();
	}

	public function user() {
		return $this->belongsTo(User::class);
	}

}
