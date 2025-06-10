<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'phone_number',
        'faq_number',
        'email1',
        'email2',
        'operasional_days',
        'operasional_times',
        'twitter_url',
        'facebook_url',
        'instagram_url',
        'maps_url',
    ];
}
