<?php

namespace Davaramyan\Blacklist;

use Illuminate\Database\Eloquent\Model;

class BlacklistEmail extends Model
{
    protected $table = 'blacklist_emails';

    protected $fillable = [
        'email',
    ];

    public $timestamps = false;
}
