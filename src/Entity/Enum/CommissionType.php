<?php

declare(strict_types=1);

namespace App\Entity\Enum;

use MyCLabs\Enum\Enum;

/**
 * @method static $this NET()
 * @method static $this GROSS()
 * @method static $this GROSS_BONUS()
 */
class CommissionType extends Enum
{
    public const NET = 'net';
    public const GROSS = 'gross';
    public const GROSS_BONUS = 'gross-bonus';
}
