<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CA1Dcd40Ead67693C02527E230Feb0498
{
    public const SCHEMA_JSON = '{"required":["id","run_id","run_url","run_attempt","node_id","head_sha","url","html_url","status","conclusion","started_at","completed_at","name","steps","check_run_url","labels","runner_id","runner_name","runner_group_id","runner_group_name","workflow_name","head_branch"],"type":"object","properties":{"check_run_url":{"type":"string","format":"uri"},"completed_at":{"type":["string","null"]},"conclusion":{"type":["string","null"]},"head_sha":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"labels":{"type":"array","items":{"type":"string"}},"name":{"type":"string"},"node_id":{"type":"string"},"run_attempt":{"type":"integer"},"run_id":{"type":"number"},"run_url":{"type":"string","format":"uri"},"runner_group_id":{"type":["integer","null"]},"runner_group_name":{"type":["string","null"]},"runner_id":{"type":["integer","null"]},"runner_name":{"type":["string","null"]},"started_at":{"type":"string","format":"date-time"},"status":{"enum":["queued","in_progress","completed","waiting"],"type":"string"},"head_branch":{"type":["string","null"],"description":"The name of the current branch."},"workflow_name":{"type":["string","null"],"description":"The name of the workflow."},"steps":{"type":"array","items":{"title":"Workflow Step","required":["name","status","conclusion","number","started_at","completed_at"],"type":"object","properties":{"completed_at":{"type":["string","null"]},"conclusion":{"enum":["failure","skipped","success","cancelled",null],"type":["string","null"]},"name":{"type":"string"},"number":{"type":"integer"},"started_at":{"type":["string","null"]},"status":{"enum":["completed","in_progress","queued","pending"],"type":"string"}}}},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'c_a1dcd40ead67693c02527e230feb0498';
    public const SCHEMA_DESCRIPTION = '';
    private string $check_run_url;
    private $completed_at;
    private $conclusion;
    private string $head_sha;
    private string $html_url;
    private int $id;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd::class)
     */
    private array $labels = array();
    private string $name;
    private string $node_id;
    private int $run_attempt;
    private int $run_id;
    private string $run_url;
    private $runner_group_id;
    private $runner_group_name;
    private $runner_id;
    private $runner_name;
    private string $started_at;
    private string $status;
    /**
     * The name of the current branch.
     */
    private $head_branch;
    /**
     * The name of the workflow.
     */
    private $workflow_name;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C19Ad8Bc8B406F886Bef86F81Fa30632B>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C19Ad8Bc8B406F886Bef86F81Fa30632B::class)
     */
    private array $steps = array();
    private string $url;
    public function check_run_url() : string
    {
        return $this->check_run_url;
    }
    public function completed_at()
    {
        return $this->completed_at;
    }
    public function conclusion()
    {
        return $this->conclusion;
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
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     */
    public function labels() : array
    {
        return $this->labels;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function run_attempt() : int
    {
        return $this->run_attempt;
    }
    public function run_id() : int
    {
        return $this->run_id;
    }
    public function run_url() : string
    {
        return $this->run_url;
    }
    public function runner_group_id()
    {
        return $this->runner_group_id;
    }
    public function runner_group_name()
    {
        return $this->runner_group_name;
    }
    public function runner_id()
    {
        return $this->runner_id;
    }
    public function runner_name()
    {
        return $this->runner_name;
    }
    public function started_at() : string
    {
        return $this->started_at;
    }
    public function status() : string
    {
        return $this->status;
    }
    /**
     * The name of the current branch.
     */
    public function head_branch()
    {
        return $this->head_branch;
    }
    /**
     * The name of the workflow.
     */
    public function workflow_name()
    {
        return $this->workflow_name;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C19Ad8Bc8B406F886Bef86F81Fa30632B>
     */
    public function steps() : array
    {
        return $this->steps;
    }
    public function url() : string
    {
        return $this->url;
    }
}