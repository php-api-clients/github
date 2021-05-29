<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Commit;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface StatusInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Repository\\Commit\\Status';

    public function createdAt(): DateTimeInterface;

    public function updatedAt(): DateTimeInterface;

    public function state(): string;

    public function targetUrl(): string;

    public function description(): string;

    public function id(): int;

    public function url(): string;

    public function context(): string;

    public function creator(): User;
}
