<?php

namespace IbrahimBougaoua\FilamentReferralSystem\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferralProgram extends Model
{
    use HasFactory;

    protected $table = 'filament_referral_programs';

    protected $fillable = [
        'name',
        'slug',
        'uri',
        'lifetime_minutes',
    ];
}