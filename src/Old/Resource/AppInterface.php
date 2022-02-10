<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface AppInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'App';

    public function id(): int;

    public function slug(): string;

    public function owner(): User;

    public function name(): string;

    public function description(): string;

    public function externalUrl(): string;

    public function htmlUrl(): string;

    public function createdAt(): DateTimeInterface;

    public function updatedAt(): DateTimeInterface;

    /**
     * @return array
     */
    public function permissions(): array;

    /**
     * @return array
     */
    public function events(): array;

    public function installationsCount(): int;
}
