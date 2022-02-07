<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class WorkflowJob
{
    public const SCHEMA_TITLE = 'Workflow Job';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private number $run_id;
    private string $head_sha;
    private string $node_id;
    private string $name;
    private string $check_run_url;
    private string $run_url;
    private string $html_url;
    private string $url;
    private string $status;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\WorkflowStep>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\WorkflowStep::class)
     */
    private array $steps = array();
    private $conclusion;
    private array $labels = array();
    private int $runner_id;
    private string $runner_name;
    private int $runner_group_id;
    private string $runner_group_name;
    private string $started_at;
    private $completed_at;
    public function id() : int
    {
        return $this->id;
    }
    public function run_id() : number
    {
        return $this->run_id;
    }
    public function head_sha() : string
    {
        return $this->head_sha;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function check_run_url() : string
    {
        return $this->check_run_url;
    }
    public function run_url() : string
    {
        return $this->run_url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function status() : string
    {
        return $this->status;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\WorkflowStep>
     */
    public function steps() : array
    {
        return $this->steps;
    }
    public function conclusion()
    {
        return $this->conclusion;
    }
    public function labels() : array
    {
        return $this->labels;
    }
    public function runner_id() : int
    {
        return $this->runner_id;
    }
    public function runner_name() : string
    {
        return $this->runner_name;
    }
    public function runner_group_id() : int
    {
        return $this->runner_group_id;
    }
    public function runner_group_name() : string
    {
        return $this->runner_group_name;
    }
    public function started_at() : string
    {
        return $this->started_at;
    }
    public function completed_at()
    {
        return $this->completed_at;
    }
}
