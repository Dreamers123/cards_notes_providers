<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    protected $fillable = ['body'];

    public function cards()
    {
        return $this->belongsTo(Card::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
