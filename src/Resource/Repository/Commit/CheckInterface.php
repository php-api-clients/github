<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Commit;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface CheckInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Repository\\Commit\\Check';

    /**
     * @return int
     */
    public function id(): int;

    /**
     * @return string
     */
    public function headSha(): string;

    /**
     * @return string
     */
    public function nodeId(): string;

    /**
     * @return string
     */
    public function externalId(): string;

    /**
     * @return string
     */
    public function url(): string;

    /**
     * @return string
     */
    public function htmlUrl(): string;

    /**
     * @return string
     */
    public function detailsUrl(): string;

    /**
     * @return string
     */
    public function status(): string;

    /**
     * @return string
     */
    public function conclusion(): string;

    /**
     * @return DateTimeInterface
     */
    public function startedAt(): DateTimeInterface;

    /**
     * @return DateTimeInterface
     */
    public function completedAt(): DateTimeInterface;

    /**
     * @return array
     */
    public function output(): array;

    /**
     * @return string
     */
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
