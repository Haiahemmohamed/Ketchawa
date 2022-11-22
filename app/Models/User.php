<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
	public $timestamps = true;
    protected $fillable = [
		'first_name', 'last_name','job', 'department', 'profil', 'office',
	];
}