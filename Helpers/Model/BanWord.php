<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class BanWord extends Model
{
    protected $table = 'bans_words';
    protected $primaryKey = 'id';
}