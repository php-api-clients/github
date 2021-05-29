<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Commit;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;
use DateTimeInterface;

/**
 * @EmptyResource("Repository\Commit\EmptyCheck")
 */
abstract class Check extends AbstractResource implements CheckInterface
{
    protected int $id;

    protected string $head_sha;

    protected string $node_id;

    protected string $external_id;

    protected string $url;

    protected string $html_url;

    protected string $details_url;

    protected string $status;

    protected string $conclusion;

    protected DateTimeInterface $started_at;

    protected DateTimeInterface $completed_at;

    /** @var array */
    protected array $output;

    protected string $name;

    /** @var array */
    protected array $check_suite;

    /** @var array */
    protected array $app;

    /** @var array */
    protected array $pull_requests;

    public function id(): int
    {
        return $this->id;
    }

    public function headSha(): string
    {
        return $this->head_sha;
    }

    public function nodeId(): string
    {
        return $this->node_id;
    }

    public function externalId(): string
    {
        return $this->external_id;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function htmlUrl(): string
    {
        return $this->html_url;
    }

    public function detailsUrl(): string
    {
        return $this->details_url;
    }

    public function status(): string
    {
        return $this->status;
    }

    public function conclusion(): string
    {
        return $this->conclusion;
    }

    public function startedAt(): DateTimeInterface
    {
        return $this->started_at;
    }

    public function completedAt(): DateTimeInterface
    {
        return $this->completed_at;
    }

    /**
     * @return array
     */
    public function output(): array
    {
        return $this->output;
    }

    public function name(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function checkSuite(): array
    {
        return $this->check_suite;
    }

    /**
     * @return array
     */
    public function app(): array
    {
        return $this->app;
    }

    /**
     * @return array
     */
    public function pullRequests(): array
    {
        return $this->pull_requests;
    }
}
