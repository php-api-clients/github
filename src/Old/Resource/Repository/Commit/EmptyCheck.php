<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Commit;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;

abstract class EmptyCheck implements CheckInterface, EmptyResourceInterface
{
    public function id(): int
    {
        return null;
    }

    public function headSha(): string
    {
        return null;
    }

    public function nodeId(): string
    {
        return null;
    }

    public function externalId(): string
    {
        return null;
    }

    public function url(): string
    {
        return null;
    }

    public function htmlUrl(): string
    {
        return null;
    }

    public function detailsUrl(): string
    {
        return null;
    }

    public function status(): string
    {
        return null;
    }

    public function conclusion(): string
    {
        return null;
    }

    public function startedAt(): DateTimeInterface
    {
        return null;
    }

    public function completedAt(): DateTimeInterface
    {
        return null;
    }

    /**
     * @return array
     */
    public function output(): array
    {
        return null;
    }

    public function name(): string
    {
        return null;
    }

    /**
     * @return array
     */
    public function checkSuite(): array
    {
        return null;
    }

    /**
     * @return array
     */
    public function app(): array
    {
        return null;
    }

    /**
     * @return array
     */
    public function pullRequests(): array
    {
        return null;
    }
}
