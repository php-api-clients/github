<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\PullRequest;

use ApiClients\Foundation\Resource\ResourceInterface;

interface RbInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Repository\\PullRequest\\Rb';

    public function label(): string;

    public function ref(): string;

    public function sha(): string;

    public function user(): User;

    public function repo(): Repository;
}
