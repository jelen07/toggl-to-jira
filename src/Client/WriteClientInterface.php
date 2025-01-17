<?php

declare(strict_types=1);

namespace App\Client;

use App\ValueObject\Entry;
use Psr\Log\LoggerInterface;

interface WriteClientInterface
{
    public function createEntry(Entry $entry, LoggerInterface $logger): bool;

    public function updateEntry(Entry $entry, LoggerInterface $logger): bool;

    public function deleteEntry(Entry $entry, LoggerInterface $logger): bool;
}
