<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Resource\ResourceInterface;

interface TagInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Repository\\Tag';

    public function name(): string;

    public function commit(): Tree;

    public function zipballUrl(): string;

    public function tarballUrl(): string;
}
