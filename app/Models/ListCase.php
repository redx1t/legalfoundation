<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ListCase extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'court', 'date', 'variation', 'status', 'judges', 'catchwords', 'headnotes', 'stages', 'lawyer_id', 'client_id'];

    /**
     * Get the client associated with the ListCase
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function client()
    {
        return $this->hasOne(Client::class);
    }

    /**
     * Get the lawyer associated with the ListCase
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function lawyer()
    {
        return $this->hasOne(Lawyer::class);
    }

    protected static function boot()
{
    parent::boot();

    static::creating(function ($query) {
        //this is for testing
        $query->client_id = 1;

        //$query->client_id = Auth::user()->client->id;
    });
}
}