<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shorturl extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'urls';


/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'shorturl', 'url',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        // 'password', 'remember_token',
    ];



	// public function getShortURL() {
	// 		return ->first('App\Techtrav\Model\Group','agentId');
	// }


// CREATE TABLE urls (
//     id SERIAL PRIMARY KEY,
//     userid integer,
//     url character varying,
//     shorturl character varying,
//     hitcount SERIAL
// );





}
