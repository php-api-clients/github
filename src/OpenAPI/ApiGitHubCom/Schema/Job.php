<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class Job
{
    public const SCHEMA_JSON        = '{"title":"Job","required":["id","node_id","run_id","run_url","head_sha","workflow_name","head_branch","name","url","html_url","status","conclusion","started_at","completed_at","check_run_url","labels","runner_id","runner_name","runner_group_id","runner_group_name"],"type":"object","properties":{"id":{"type":"integer","description":"The id of the job.","examples":[21]},"run_id":{"type":"integer","description":"The id of the associated workflow run.","examples":[5]},"run_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/runs\\/5"]},"run_attempt":{"type":"integer","description":"Attempt number of the associated workflow run, 1 for first attempt and higher if the workflow was re-run.","examples":[1]},"node_id":{"type":"string","examples":["MDg6Q2hlY2tSdW40"]},"head_sha":{"type":"string","description":"The SHA of the commit that is being run.","examples":["009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d"]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/jobs\\/21"]},"html_url":{"type":["string","null"],"examples":["https:\\/\\/github.com\\/github\\/hello-world\\/runs\\/4"]},"status":{"enum":["queued","in_progress","completed"],"type":"string","description":"The phase of the lifecycle that the job is currently in.","examples":["queued"]},"conclusion":{"enum":["success","failure","neutral","cancelled","skipped","timed_out","action_required",null],"type":["string","null"],"description":"The outcome of the job.","examples":["success"]},"started_at":{"type":"string","description":"The time that the job started, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]},"completed_at":{"type":["string","null"],"description":"The time that the job finished, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]},"name":{"type":"string","description":"The name of the job.","examples":["test-coverage"]},"steps":{"type":"array","items":{"required":["name","status","conclusion","number"],"type":"object","properties":{"status":{"enum":["queued","in_progress","completed"],"type":"string","description":"The phase of the lifecycle that the job is currently in.","examples":["queued"]},"conclusion":{"type":["string","null"],"description":"The outcome of the job.","examples":["success"]},"name":{"type":"string","description":"The name of the job.","examples":["test-coverage"]},"number":{"type":"integer","examples":[1]},"started_at":{"type":["string","null"],"description":"The time that the step started, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]},"completed_at":{"type":["string","null"],"description":"The time that the job finished, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]}}},"description":"Steps in this job."},"check_run_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/check-runs\\/4"]},"labels":{"type":"array","items":{"type":"string"},"description":"Labels for the workflow job. Specified by the \\"runs_on\\" attribute in the action\'s workflow file.","examples":["self-hosted","foo","bar"]},"runner_id":{"type":["integer","null"],"description":"The ID of the runner to which this job has been assigned. (If a runner hasn\'t yet been assigned, this will be null.)","examples":[1]},"runner_name":{"type":["string","null"],"description":"The name of the runner to which this job has been assigned. (If a runner hasn\'t yet been assigned, this will be null.)","examples":["my runner"]},"runner_group_id":{"type":["integer","null"],"description":"The ID of the runner group to which this job has been assigned. (If a runner hasn\'t yet been assigned, this will be null.)","examples":[2]},"runner_group_name":{"type":["string","null"],"description":"The name of the runner group to which this job has been assigned. (If a runner hasn\'t yet been assigned, this will be null.)","examples":["my runner group"]},"workflow_name":{"type":["string","null"],"description":"The name of the workflow.","examples":["Build"]},"head_branch":{"type":["string","null"],"description":"The name of the current branch.","examples":["main"]}},"description":"Information of a job execution in a workflow run"}';
    public const SCHEMA_TITLE       = 'Job';
    public const SCHEMA_DESCRIPTION = 'Information of a job execution in a workflow run';
    /**
     * The id of the job.
     */
    public ?int $id;
    /**
     * The id of the associated workflow run.
     */
    public ?int $run_id;
    public ?string $run_url;
    /**
     * Attempt number of the associated workflow run, 1 for first attempt and higher if the workflow was re-run.
     */
    public int $run_attempt;
    public ?string $node_id;
    /**
     * The SHA of the commit that is being run.
     */
    public ?string $head_sha;
    public ?string $url;
    public ?string $html_url;
    /**
     * The phase of the lifecycle that the job is currently in.
     */
    public ?string $status;
    /**
     * The outcome of the job.
     */
    public ?string $conclusion;
    /**
     * The time that the job started, in ISO 8601 format.
     */
    public ?string $started_at;
    /**
     * The time that the job finished, in ISO 8601 format.
     */
    public ?string $completed_at;
    /**
     * The name of the job.
     */
    public ?string $name;
    /**
     * Steps in this job.
     */
    public array $steps;
    public ?string $check_run_url;
    /**
     * Labels for the workflow job. Specified by the "runs_on" attribute in the action's workflow file.
     */
    public ?array $labels;
    /**
     * The ID of the runner to which this job has been assigned. (If a runner hasn't yet been assigned, this will be null.)
     */
    public ?int $runner_id;
    /**
     * The name of the runner to which this job has been assigned. (If a runner hasn't yet been assigned, this will be null.)
     */
    public ?string $runner_name;
    /**
     * The ID of the runner group to which this job has been assigned. (If a runner hasn't yet been assigned, this will be null.)
     */
    public ?int $runner_group_id;
    /**
     * The name of the runner group to which this job has been assigned. (If a runner hasn't yet been assigned, this will be null.)
     */
    public ?string $runner_group_name;
    /**
     * The name of the workflow.
     */
    public ?string $workflow_name;
    /**
     * The name of the current branch.
     */
    public ?string $head_branch;

    public function __construct(int $id, int $run_id, string $run_url, int $run_attempt, string $node_id, string $head_sha, string $url, string $html_url, string $status, string $conclusion, string $started_at, string $completed_at, string $name, array $steps, string $check_run_url, array $labels, int $runner_id, string $runner_name, int $runner_group_id, string $runner_group_name, string $workflow_name, string $head_branch)
    {
        $this->id                = $id;
        $this->run_id            = $run_id;
        $this->run_url           = $run_url;
        $this->run_attempt       = $run_attempt;
        $this->node_id           = $node_id;
        $this->head_sha          = $head_sha;
        $this->url               = $url;
        $this->html_url          = $html_url;
        $this->status            = $status;
        $this->conclusion        = $conclusion;
        $this->started_at        = $started_at;
        $this->completed_at      = $completed_at;
        $this->name              = $name;
        $this->steps             = $steps;
        $this->check_run_url     = $check_run_url;
        $this->labels            = $labels;
        $this->runner_id         = $runner_id;
        $this->runner_name       = $runner_name;
        $this->runner_group_id   = $runner_group_id;
        $this->runner_group_name = $runner_group_name;
        $this->workflow_name     = $workflow_name;
        $this->head_branch       = $head_branch;
    }
}
