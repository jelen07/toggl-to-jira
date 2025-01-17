<?php

declare(strict_types=1);

namespace App\Synchronization;

use App\ValueObject\GroupMode;
use App\ValueObject\Range;
use App\ValueObject\Rounding;
use App\ValueObject\SyncMode;

final class Options
{
    /**
     * @param array<string> $issueCodes
     */
    public function __construct(
        public readonly Range $range,
        public readonly GroupMode $groupMode,
        public readonly SyncMode $syncMode,
        public readonly ?Rounding $rounding = null,
        public readonly array $issueCodes = [],
    ) {}
}
