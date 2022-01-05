<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListCaseFile extends Model
{
    use HasFactory;

    protected $fillable = ['list_case_id', 'who', 'file_url', 'file_name', 'comments'];

    /**
     * Get the list_case that owns the ListCaseFile
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function list_case()
    {
        return $this->belongsTo(ListCase::class);
    }
}