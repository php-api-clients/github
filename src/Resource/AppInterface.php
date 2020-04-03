<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface AppInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'App';

    /**
     * @return int
     */
    public function id(): int;

    /**
     * @return string
     */
    public function slug(): string;

    /**
     * @return User
     */
    public function owner(): User;

    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return string
     */
    public function description(): string;

    /**
     * @return string
     */
    public function externalUrl(): string;

    /**
     * @return string
     */
    public function htmlUrl(): string;

    /**
     * @return DateTimeInterface
     */
    public function createdAt(): DateTimeInterface;

    /**
     * @return DateTimeInterface
     */
    public function updatedAt(): DateTimeInterface;

    /**
     * @return array
     */
    public function permissions(): array;

    /**
     * @return array
     */
    public function events(): array;

    /**
     * @return int
     */
    public function installationsCount(): int;
}
