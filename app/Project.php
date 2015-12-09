<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Project extends Model {

	//
	protected $fillable = [
		'title',
		'body',
		'published_at',
		'description',
		'user_id',
		'image',
		'video',
		'story'
	];

	protected $dates = ['published_at'];

	public function setPublishedAtAttribute($date)
	{
		$this->attributes['published_at'] = Carbon::createFromFormat("Y-m-d", $date);
	}

	public function user()
	{
		return $this->belongsTo('App\User', 'user_id');
	}

}
