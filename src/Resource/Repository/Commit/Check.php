<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Commit;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;
use DateTimeInterface;

/**
 * @EmptyResource("Repository\Commit\EmptyCheck")
 */
abstract class Check extends AbstractResource implements CheckInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $head_sha;

    /**
     * @var string
     */
    protected $node_id;

    /**
     * @var string
     */
    protected $external_id;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var string
     */
    protected $html_url;

    /**
     * @var string
     */
    protected $details_url;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $conclusion;

    /**
     * @var DateTimeInterface
     */
    protected $started_at;

    /**
     * @var DateTimeInterface
     */
    protected $completed_at;

    /**
     * @var array
     */
    protected $output;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    protected $check_suite;

    /**
     * @var array
     */
    protected $app;

    /**
     * @var array
     */
    protected $pull_requests;

    /**
     * @return int
     */
    public function id(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function headSha(): string
    {
        return $this->head_sha;
    }

    /**
     * @return string
     */
    public function nodeId(): string
    {
        return $this->node_id;
    }

    /**
     * @return string
     */
    public function externalId(): string
    {
        return $this->external_id;
    }

    /**
     * @return string
     */
    public function url(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function htmlUrl(): string
    {
        return $this->html_url;
    }

    /**
     * @return string
     */
    public function detailsUrl(): string
    {
        return $this->details_url;
    }

    /**
     * @return string
     */
    public function status(): string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function conclusion(): string
    {
        return $this->conclusion;
    }

    /**
     * @return DateTimeInterface
     */
    public function startedAt(): DateTimeInterface
    {
        return $this->started_at;
    }

    /**
     * @return DateTimeInterface
     */
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

    /**
     * @return string
     */
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
