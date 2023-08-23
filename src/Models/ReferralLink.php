<?php

namespace IbrahimBougaoua\FilamentReferralSystem\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class ReferralLink extends Model
{
    use HasFactory;

    protected $table = 'filament_referral_links';

    protected $fillable = [
        'code',
        'referral_program_id',
        'user_id',
    ];

    protected static function boot()
    {
        static::creating(function (ReferralLink $model) {
            $model->generateUuidCode();
        });
    }

    private function generateUuidCode()
    {
        $this->code = (string) Uuid::uuid1();
    }

    public static function getReferral($user, $program)
    {
        return static::firstOrCreate([
            'user_id' => $user->id,
            'referral_program_id' => $program->id,
        ]);
    }

    public function getLinkAttribute()
    {
        return url($this->program->uri).'?ref='.$this->code;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function program()
    {
        return $this->belongsTo(ReferralProgram::class, 'referral_program_id');
    }

    public function relationships()
    {
        return $this->hasMany(ReferralRelationship::class);
    }
}
