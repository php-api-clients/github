<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Commit;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface CheckInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Repository\\Commit\\Check';

    public function id(): int;

    public function headSha(): string;

    public function nodeId(): string;

    public function externalId(): string;

    public function url(): string;

    public function htmlUrl(): string;

    public function detailsUrl(): string;

    public function status(): string;

    public function conclusion(): string;

    public function startedAt(): DateTimeInterface;

    public function completedAt(): DateTimeInterface;

    /**
     * @return array
     */
    public function output(): array;

    public function name(): string;

    /**
     * @return array
     */
    public function checkSuite(): array;

    /**
     * @return array
     */
    public function app(): array;

    /**
     * @return array
     */
    public function pullRequests(): array;
}
