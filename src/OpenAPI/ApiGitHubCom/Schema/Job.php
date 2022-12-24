<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Job
{
    public const SCHEMA_JSON = '{"title":"Job","required":["id","node_id","run_id","run_url","head_sha","workflow_name","head_branch","name","url","html_url","status","conclusion","started_at","completed_at","check_run_url","labels","runner_id","runner_name","runner_group_id","runner_group_name"],"type":"object","properties":{"id":{"type":"integer","description":"The id of the job.","examples":[21]},"run_id":{"type":"integer","description":"The id of the associated workflow run.","examples":[5]},"run_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/runs\\/5"]},"run_attempt":{"type":"integer","description":"Attempt number of the associated workflow run, 1 for first attempt and higher if the workflow was re-run.","examples":[1]},"node_id":{"type":"string","examples":["MDg6Q2hlY2tSdW40"]},"head_sha":{"type":"string","description":"The SHA of the commit that is being run.","examples":["009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d"]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/jobs\\/21"]},"html_url":{"type":["string","null"],"examples":["https:\\/\\/github.com\\/github\\/hello-world\\/runs\\/4"]},"status":{"enum":["queued","in_progress","completed"],"type":"string","description":"The phase of the lifecycle that the job is currently in.","examples":["queued"]},"conclusion":{"enum":["success","failure","neutral","cancelled","skipped","timed_out","action_required",null],"type":["string","null"],"description":"The outcome of the job.","examples":["success"]},"started_at":{"type":"string","description":"The time that the job started, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]},"completed_at":{"type":["string","null"],"description":"The time that the job finished, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]},"name":{"type":"string","description":"The name of the job.","examples":["test-coverage"]},"steps":{"type":"array","items":{"required":["name","status","conclusion","number"],"type":"object","properties":{"status":{"enum":["queued","in_progress","completed"],"type":"string","description":"The phase of the lifecycle that the job is currently in.","examples":["queued"]},"conclusion":{"type":["string","null"],"description":"The outcome of the job.","examples":["success"]},"name":{"type":"string","description":"The name of the job.","examples":["test-coverage"]},"number":{"type":"integer","examples":[1]},"started_at":{"type":["string","null"],"description":"The time that the step started, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]},"completed_at":{"type":["string","null"],"description":"The time that the job finished, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]}}},"description":"Steps in this job."},"check_run_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/check-runs\\/4"]},"labels":{"type":"array","items":{"type":"string"},"description":"Labels for the workflow job. Specified by the \\"runs_on\\" attribute in the action\'s workflow file.","examples":["self-hosted","foo","bar"]},"runner_id":{"type":["integer","null"],"description":"The ID of the runner to which this job has been assigned. (If a runner hasn\'t yet been assigned, this will be null.)","examples":[1]},"runner_name":{"type":["string","null"],"description":"The name of the runner to which this job has been assigned. (If a runner hasn\'t yet been assigned, this will be null.)","examples":["my runner"]},"runner_group_id":{"type":["integer","null"],"description":"The ID of the runner group to which this job has been assigned. (If a runner hasn\'t yet been assigned, this will be null.)","examples":[2]},"runner_group_name":{"type":["string","null"],"description":"The name of the runner group to which this job has been assigned. (If a runner hasn\'t yet been assigned, this will be null.)","examples":["my runner group"]},"workflow_name":{"type":["string","null"],"description":"The name of the workflow.","examples":["Build"]},"head_branch":{"type":["string","null"],"description":"The name of the current branch.","examples":["main"]}},"description":"Information of a job execution in a workflow run"}';
    public const SCHEMA_TITLE = 'Job';
    public const SCHEMA_DESCRIPTION = 'Information of a job execution in a workflow run';
    /**
     * The id of the job.
     */
    private int $id;
    /**
     * The id of the associated workflow run.
     */
    private int $run_id;
    private string $run_url;
    /**
     * Attempt number of the associated workflow run, 1 for first attempt and higher if the workflow was re-run.
     */
    private ?int $run_attempt = null;
    private string $node_id;
    /**
     * The SHA of the commit that is being run.
     */
    private string $head_sha;
    private string $url;
    private $html_url;
    /**
     * The phase of the lifecycle that the job is currently in.
     */
    private string $status;
    /**
     * The outcome of the job.
     */
    private $conclusion;
    /**
     * The time that the job started, in ISO 8601 format.
     */
    private string $started_at;
    /**
     * The time that the job finished, in ISO 8601 format.
     */
    private $completed_at;
    /**
     * The name of the job.
     */
    private string $name;
    /**
     * Steps in this job.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C1D83C8699Ba8906Fe0F191591Da08Daa>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C1D83C8699Ba8906Fe0F191591Da08Daa::class)
     */
    private array $steps = array();
    private string $check_run_url;
    /**
     * Labels for the workflow job. Specified by the "runs_on" attribute in the action's workflow file.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd::class)
     */
    private array $labels = array();
    /**
     * The ID of the runner to which this job has been assigned. (If a runner hasn't yet been assigned, this will be null.)
     */
    private $runner_id;
    /**
     * The name of the runner to which this job has been assigned. (If a runner hasn't yet been assigned, this will be null.)
     */
    private $runner_name;
    /**
     * The ID of the runner group to which this job has been assigned. (If a runner hasn't yet been assigned, this will be null.)
     */
    private $runner_group_id;
    /**
     * The name of the runner group to which this job has been assigned. (If a runner hasn't yet been assigned, this will be null.)
     */
    private $runner_group_name;
    /**
     * The name of the workflow.
     */
    private $workflow_name;
    /**
     * The name of the current branch.
     */
    private $head_branch;
    /**
     * The id of the job.
     */
    public function id() : int
    {
        return $this->id;
    }
    /**
     * The id of the associated workflow run.
     */
    public function run_id() : int
    {
        return $this->run_id;
    }
    public function run_url() : string
    {
        return $this->run_url;
    }
    /**
     * Attempt number of the associated workflow run, 1 for first attempt and higher if the workflow was re-run.
     */
    public function run_attempt() : ?int
    {
        return $this->run_attempt;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * The SHA of the commit that is being run.
     */
    public function head_sha() : string
    {
        return $this->head_sha;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function html_url()
    {
        return $this->html_url;
    }
    /**
     * The phase of the lifecycle that the job is currently in.
     */
    public function status() : string
    {
        return $this->status;
    }
    /**
     * The outcome of the job.
     */
    public function conclusion()
    {
        return $this->conclusion;
    }
    /**
     * The time that the job started, in ISO 8601 format.
     */
    public function started_at() : string
    {
        return $this->started_at;
    }
    /**
     * The time that the job finished, in ISO 8601 format.
     */
    public function completed_at()
    {
        return $this->completed_at;
    }
    /**
     * The name of the job.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * Steps in this job.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C1D83C8699Ba8906Fe0F191591Da08Daa>
     */
    public function steps() : array
    {
        return $this->steps;
    }
    public function check_run_url() : string
    {
        return $this->check_run_url;
    }
    /**
     * Labels for the workflow job. Specified by the "runs_on" attribute in the action's workflow file.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     */
    public function labels() : array
    {
        return $this->labels;
    }
    /**
     * The ID of the runner to which this job has been assigned. (If a runner hasn't yet been assigned, this will be null.)
     */
    public function runner_id()
    {
        return $this->runner_id;
    }
    /**
     * The name of the runner to which this job has been assigned. (If a runner hasn't yet been assigned, this will be null.)
     */
    public function runner_name()
    {
        return $this->runner_name;
    }
    /**
     * The ID of the runner group to which this job has been assigned. (If a runner hasn't yet been assigned, this will be null.)
     */
    public function runner_group_id()
    {
        return $this->runner_group_id;
    }
    /**
     * The name of the runner group to which this job has been assigned. (If a runner hasn't yet been assigned, this will be null.)
     */
    public function runner_group_name()
    {
        return $this->runner_group_name;
    }
    /**
     * The name of the workflow.
     */
    public function workflow_name()
    {
        return $this->workflow_name;
    }
    /**
     * The name of the current branch.
     */
    public function head_branch()
    {
        return $this->head_branch;
    }
}
