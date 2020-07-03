<?php

declare(strict_types=1);

namespace App\Entity;

use App\Entity\Enum\CommissionType;

trait ContractTrait
{
    /**
     * @var CommissionType
     */
    protected $commissionType;
}
