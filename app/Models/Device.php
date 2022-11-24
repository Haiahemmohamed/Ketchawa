<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
	public $timestamps = true;
    protected $fillable = [
		'service', 'office','name', 'type','sn', 'model','cpu', 'threads','ram', 'ram_type','storage', 'storage_type','os', 'os_version','os_activation', 'os_sn', 'anti_virus', 'av_activation', 'av_sn',
	];
}
