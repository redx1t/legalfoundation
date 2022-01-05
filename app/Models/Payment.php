<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['hash', 'donation_id', 'status'];

    /**
     * Get the donation that owns the Payment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function donation()
    {
        return $this->belongsTo(Donation::class, 'foreign_key', 'other_key');
    }
}