<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface WebHookInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'WebHook';

    /**
     * @return int
     */
    public function id(): int;

    /**
     * @return string
     */
    public function url(): string;

    /**
     * @return string
     */
    public function testUrl(): string;

    /**
     * @return string
     */
    public function pingUrl(): string;

    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return array
     */
    public function events(): array;

    /**
     * @return bool
     */
    public function active(): bool;

    /**
     * @return WebHook\Config
     */
    public function config(): WebHook\Config;

    /**
     * @return DateTimeInterface
     */
    public function createdAt(): DateTimeInterface;

    /**
     * @return DateTimeInterface
     */
    public function updatedAt(): DateTimeInterface;
}
