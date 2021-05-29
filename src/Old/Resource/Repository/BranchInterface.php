<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Client\Github\Resource\TreeInterface;
use ApiClients\Foundation\Resource\ResourceInterface;

interface BranchInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Repository\\Branch';

    public function name(): string;

    public function commit(): TreeInterface;

    public function protected(): bool;

    public function protectionUrl(): string;
}
