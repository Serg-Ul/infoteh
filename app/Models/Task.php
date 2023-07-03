<?php

namespace App\Models;

use Carbon\Carbon;
use Carbon\Traits\Date;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * Guarded fields.
     *
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * View for sign up.
     *
     * @param string
     * @return string | null
     */
    public function getDeadlineAttribute($value): string | null
    {
        return $value ? Carbon::parse($value)->format('d/m/Y') : null;
    }
}
