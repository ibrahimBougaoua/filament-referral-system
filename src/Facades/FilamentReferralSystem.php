<?php

namespace IbrahimBougaoua\FilamentReferralSystem\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \IbrahimBougaoua\FilamentReferralSystem\FilamentReferralSystem
 */
class FilamentReferralSystem extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \IbrahimBougaoua\FilamentReferralSystem\FilamentReferralSystem::class;
    }
}
