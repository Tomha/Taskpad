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
		return $query->where('completed', 0);
	}
	
	public function scopeComplete($query) {
		return $query->where('completed', 1);
	}

	public function scopeCreatedBefore($query, $time) {
		return $query->where('created_at', '<', $time);
	}

	public function scopeCompletedBefore($query, $time) {
		return $query->where('completed_at', '<', $time);
	}

	public function scopeUserId($query, $user_id) {
		return $query->where('user_id', $user_id);
	}

	public function user() {
		return $this->belongsTo(User::class);
	}

}
