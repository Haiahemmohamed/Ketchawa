<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
		'open_date',
        'title',
        'requester',
        'department',
        'office',
        'job',
        'ticket_category',
        'priority',
        'ticket_status',
        'description',
	];
}
