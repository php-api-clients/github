<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class WorkflowRun
{
    public const SCHEMA_TITLE = 'Workflow Run';
    public const SCHEMA_DESCRIPTION = '';
    private string $artifacts_url;
    private string $cancel_url;
    private string $check_suite_url;
    private int $check_suite_id;
    private string $check_suite_node_id;
    private $conclusion;
    private string $created_at;
    private string $event;
    private string $head_branch;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\CommitSimple::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\CommitSimple $head_commit;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\RepositoryLite::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\RepositoryLite $head_repository;
    private string $head_sha;
    private string $html_url;
    private int $id;
    private string $jobs_url;
    private string $logs_url;
    private string $node_id;
    private string $name;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\WorkflowRun\PullRequests>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\WorkflowRun\PullRequests::class)
     */
    private array $pull_requests = array();
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\RepositoryLite::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\RepositoryLite $repository;
    private string $rerun_url;
    private int $run_number;
    private string $status;
    private string $updated_at;
    private string $url;
    private int $workflow_id;
    private string $workflow_url;
    public function artifacts_url() : string
    {
        return $this->artifacts_url;
    }
    public function cancel_url() : string
    {
        return $this->cancel_url;
    }
    public function check_suite_url() : string
    {
        return $this->check_suite_url;
    }
    public function check_suite_id() : int
    {
        return $this->check_suite_id;
    }
    public function check_suite_node_id() : string
    {
        return $this->check_suite_node_id;
    }
    public function conclusion()
    {
        return $this->conclusion;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function event() : string
    {
        return $this->event;
    }
    public function head_branch() : string
    {
        return $this->head_branch;
    }
    public function head_commit() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\CommitSimple
    {
        return $this->head_commit;
    }
    public function head_repository() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\RepositoryLite
    {
        return $this->head_repository;
    }
    public function head_sha() : string
    {
        return $this->head_sha;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function jobs_url() : string
    {
        return $this->jobs_url;
    }
    public function logs_url() : string
    {
        return $this->logs_url;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function name() : string
    {
        return $this->name;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\WorkflowRun\PullRequests>
     */
    public function pull_requests() : array
    {
        return $this->pull_requests;
    }
    public function repository() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\RepositoryLite
    {
        return $this->repository;
    }
    public function rerun_url() : string
    {
        return $this->rerun_url;
    }
    public function run_number() : int
    {
        return $this->run_number;
    }
    public function status() : string
    {
        return $this->status;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function workflow_id() : int
    {
        return $this->workflow_id;
    }
    public function workflow_url() : string
    {
        return $this->workflow_url;
    }
}
