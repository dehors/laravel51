<?php

namespace laravel51;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;
class Movie extends Model
{
  protected $table = "movies";
    protected $fillable = ['name','path','cast','direction','duration','genders_id'];

    public function setPathAttribute($path){
		$name = Carbon::now()->second.$path->getClientOriginalName();
		$this->attributes['path'] = $name;
		\Storage::disk('local')->put($name, \File::get($path));
	}

	public static function Movies(){
		return DB::table('movies')
			->join('genders','genders.id','=','movies.genders_id')
			->select('movies.*', 'genders.genre')
			->get();
	}
}
