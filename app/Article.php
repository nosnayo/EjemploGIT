<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//ejemplo de uso de slug
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Article extends Model implements SluggableInterface
{
    //uso de slug
    use SluggableTrait;
    protected $sluggable = [
		'build_from'	=>	'title',
		'save_to'		=>	'slug',
	];//hace una migracion



    protected $table = "articles";
    protected $fillable = ['title', 'content', 'category_id', 'user_id'];

    /*Uso de relaciones*/
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function images()
    {
    	return $this->hasMany('App\Image');
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Tag');
    }
}
