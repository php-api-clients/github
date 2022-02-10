<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface RepositorySimpleInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'RepositorySimple';

    public function id(): int;

    public function name(): string;

    public function url(): string;
}
