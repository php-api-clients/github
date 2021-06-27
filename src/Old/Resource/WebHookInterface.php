<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface WebHookInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'WebHook';

    public function id(): int;

    public function url(): string;

    public function testUrl(): string;

    public function pingUrl(): string;

    public function name(): string;

    /**
     * @return array
     */
    public function events(): array;

    public function active(): bool;

    public function config(): WebHook\Config;

    public function createdAt(): DateTimeInterface;

    public function updatedAt(): DateTimeInterface;
}
