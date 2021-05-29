<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class WorkflowRun
{
    public const SCHEMA_TITLE            = 'Workflow Run';
    public const SCHEMA_DESCRIPTION      = '';
    private ?string $artifacts_url       = null;
    private ?string $cancel_url          = null;
    private ?string $check_suite_url     = null;
    private ?int $check_suite_id         = null;
    private ?string $check_suite_node_id = null;
    private $conclusion;
    private ?string $created_at  = null;
    private ?string $event       = null;
    private ?string $head_branch = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\CommitSimple::class) */
    private ?CommitSimple $head_commit = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\RepositoryLite::class) */
    private ?RepositoryLite $head_repository = null;
    private ?string $head_sha                = null;
    private ?string $html_url                = null;
    private ?int $id                         = null;
    private ?string $jobs_url                = null;
    private ?string $logs_url                = null;
    private ?string $node_id                 = null;
    private ?string $name                    = null;
    private array $pull_requests             = [];
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\RepositoryLite::class) */
    private ?RepositoryLite $repository = null;
    private ?string $rerun_url          = null;
    private ?int $run_number            = null;
    private ?string $status             = null;
    private ?string $updated_at         = null;
    private ?string $url                = null;
    private ?int $workflow_id           = null;
    private ?string $workflow_url       = null;

    public function artifacts_url(): ?string
    {
        return $this->artifacts_url;
    }

    public function cancel_url(): ?string
    {
        return $this->cancel_url;
    }

    public function check_suite_url(): ?string
    {
        return $this->check_suite_url;
    }

    public function check_suite_id(): ?int
    {
        return $this->check_suite_id;
    }

    public function check_suite_node_id(): ?string
    {
        return $this->check_suite_node_id;
    }

    public function conclusion()
    {
        return $this->conclusion;
    }

    public function created_at(): ?string
    {
        return $this->created_at;
    }

    public function event(): ?string
    {
        return $this->event;
    }

    public function head_branch(): ?string
    {
        return $this->head_branch;
    }

    public function head_commit(): ?CommitSimple
    {
        return $this->head_commit;
    }

    public function head_repository(): ?RepositoryLite
    {
        return $this->head_repository;
    }

    public function head_sha(): ?string
    {
        return $this->head_sha;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }

    public function id(): ?int
    {
        return $this->id;
    }

    public function jobs_url(): ?string
    {
        return $this->jobs_url;
    }

    public function logs_url(): ?string
    {
        return $this->logs_url;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    public function name(): ?string
    {
        return $this->name;
    }

    /**
     * @return array<PullRequest>
     */
    public function pull_requests(): array
    {
        return $this->pull_requests;
    }

    public function repository(): ?RepositoryLite
    {
        return $this->repository;
    }

    public function rerun_url(): ?string
    {
        return $this->rerun_url;
    }

    public function run_number(): ?int
    {
        return $this->run_number;
    }

    public function status(): ?string
    {
        return $this->status;
    }

    public function updated_at(): ?string
    {
        return $this->updated_at;
    }

    public function url(): ?string
    {
        return $this->url;
    }

    public function workflow_id(): ?int
    {
        return $this->workflow_id;
    }

    public function workflow_url(): ?string
    {
        return $this->workflow_url;
    }
}
