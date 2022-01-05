<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $this->hasOne(User::class);
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
}