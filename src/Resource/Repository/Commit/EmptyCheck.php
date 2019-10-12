<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Commit;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;

abstract class EmptyCheck implements CheckInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function id(): int
    {
        return null;
    }

    /**
     * @return string
     */
    public function headSha(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function nodeId(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function externalId(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function url(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function htmlUrl(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function detailsUrl(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function status(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function conclusion(): string
    {
        return null;
    }

    /**
     * @return DateTimeInterface
     */
    public function startedAt(): DateTimeInterface
    {
        return null;
    }

    /**
     * @return DateTimeInterface
     */
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

    /**
     * @return string
     */
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
