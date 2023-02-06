<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookDeploymentCreated;

final class WorkflowRun
{
    public const SCHEMA_JSON = '{"title":"Deployment Workflow Run","required":["id","name","node_id","head_branch","head_sha","run_number","event","status","conclusion","workflow_id","check_suite_id","check_suite_node_id","url","html_url","path","pull_requests","created_at","updated_at","actor","run_attempt","run_started_at","display_title"],"type":["object","null"],"properties":{"actor":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"artifacts_url":{"type":"string"},"cancel_url":{"type":"string"},"check_suite_id":{"type":"integer"},"check_suite_node_id":{"type":"string"},"check_suite_url":{"type":"string"},"conclusion":{"enum":["success","failure","neutral","cancelled","timed_out","action_required","stale",null],"type":["string","null"]},"created_at":{"type":"string","format":"date-time"},"display_title":{"type":"string"},"event":{"type":"string"},"head_branch":{"type":"string"},"head_commit":{"type":["null"]},"head_repository":{"type":"object","properties":{"archive_url":{"type":"string"},"assignees_url":{"type":"string"},"blobs_url":{"type":"string"},"branches_url":{"type":"string"},"collaborators_url":{"type":"string"},"comments_url":{"type":"string"},"commits_url":{"type":"string"},"compare_url":{"type":"string"},"contents_url":{"type":"string"},"contributors_url":{"type":"string"},"deployments_url":{"type":"string"},"description":{"type":["null"]},"downloads_url":{"type":"string"},"events_url":{"type":"string"},"fork":{"type":"boolean"},"forks_url":{"type":"string"},"full_name":{"type":"string"},"git_commits_url":{"type":"string"},"git_refs_url":{"type":"string"},"git_tags_url":{"type":"string"},"hooks_url":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"issue_comment_url":{"type":"string"},"issue_events_url":{"type":"string"},"issues_url":{"type":"string"},"keys_url":{"type":"string"},"labels_url":{"type":"string"},"languages_url":{"type":"string"},"merges_url":{"type":"string"},"milestones_url":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"notifications_url":{"type":"string"},"owner":{"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"private":{"type":"boolean"},"pulls_url":{"type":"string"},"releases_url":{"type":"string"},"stargazers_url":{"type":"string"},"statuses_url":{"type":"string"},"subscribers_url":{"type":"string"},"subscription_url":{"type":"string"},"tags_url":{"type":"string"},"teams_url":{"type":"string"},"trees_url":{"type":"string"},"url":{"type":"string"}}},"head_sha":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"jobs_url":{"type":"string"},"logs_url":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"path":{"type":"string"},"previous_attempt_url":{"type":["null"]},"pull_requests":{"type":"array","items":{"title":"Check Run Pull Request","required":["url","id","number","head","base"],"type":"object","properties":{"base":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"head":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"id":{"type":"integer"},"number":{"type":"integer"},"url":{"type":"string","format":"uri"}}}},"referenced_workflows":{"type":["array","null"],"items":{"required":["path","sha"],"type":"object","properties":{"path":{"type":"string"},"ref":{"type":"string"},"sha":{"type":"string"}}}},"repository":{"type":"object","properties":{"archive_url":{"type":"string"},"assignees_url":{"type":"string"},"blobs_url":{"type":"string"},"branches_url":{"type":"string"},"collaborators_url":{"type":"string"},"comments_url":{"type":"string"},"commits_url":{"type":"string"},"compare_url":{"type":"string"},"contents_url":{"type":"string"},"contributors_url":{"type":"string"},"deployments_url":{"type":"string"},"description":{"type":["null"]},"downloads_url":{"type":"string"},"events_url":{"type":"string"},"fork":{"type":"boolean"},"forks_url":{"type":"string"},"full_name":{"type":"string"},"git_commits_url":{"type":"string"},"git_refs_url":{"type":"string"},"git_tags_url":{"type":"string"},"hooks_url":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"issue_comment_url":{"type":"string"},"issue_events_url":{"type":"string"},"issues_url":{"type":"string"},"keys_url":{"type":"string"},"labels_url":{"type":"string"},"languages_url":{"type":"string"},"merges_url":{"type":"string"},"milestones_url":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"notifications_url":{"type":"string"},"owner":{"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"private":{"type":"boolean"},"pulls_url":{"type":"string"},"releases_url":{"type":"string"},"stargazers_url":{"type":"string"},"statuses_url":{"type":"string"},"subscribers_url":{"type":"string"},"subscription_url":{"type":"string"},"tags_url":{"type":"string"},"teams_url":{"type":"string"},"trees_url":{"type":"string"},"url":{"type":"string"}}},"rerun_url":{"type":"string"},"run_attempt":{"type":"integer"},"run_number":{"type":"integer"},"run_started_at":{"type":"string","format":"date-time"},"status":{"enum":["requested","in_progress","completed","queued","waiting","pending"],"type":"string"},"triggering_actor":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"},"workflow_id":{"type":"integer"},"workflow_url":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Deployment Workflow Run';
    public const SCHEMA_DESCRIPTION = '';
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\Actor $actor;
    public readonly ?string $artifacts_url;
    public readonly ?string $cancel_url;
    public readonly int $check_suite_id;
    public readonly string $check_suite_node_id;
    public readonly ?string $check_suite_url;
    public readonly ?string $conclusion;
    public readonly string $created_at;
    public readonly string $display_title;
    public readonly string $event;
    public readonly string $head_branch;
    public readonly mixed $head_commit;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\HeadRepository $head_repository;
    public readonly string $head_sha;
    public readonly string $html_url;
    public readonly int $id;
    public readonly ?string $jobs_url;
    public readonly ?string $logs_url;
    public readonly string $name;
    public readonly string $node_id;
    public readonly string $path;
    public readonly mixed $previous_attempt_url;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\PullRequests>
     */
    public readonly array $pull_requests;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\ReferencedWorkflows>
     */
    public readonly array $referenced_workflows;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\Repository $repository;
    public readonly ?string $rerun_url;
    public readonly int $run_attempt;
    public readonly int $run_number;
    public readonly string $run_started_at;
    public readonly string $status;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\TriggeringActor $triggering_actor;
    public readonly string $updated_at;
    public readonly string $url;
    public readonly int $workflow_id;
    public readonly ?string $workflow_url;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\PullRequests> $pull_requests
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\ReferencedWorkflows> $referenced_workflows
     */
    public function __construct(?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\Actor $actor, string $artifacts_url, string $cancel_url, int $check_suite_id, string $check_suite_node_id, string $check_suite_url, string $conclusion, string $created_at, string $display_title, string $event, string $head_branch, mixed $head_commit, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\HeadRepository $head_repository, string $head_sha, string $html_url, int $id, string $jobs_url, string $logs_url, string $name, string $node_id, string $path, mixed $previous_attempt_url, array $pull_requests, array $referenced_workflows, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\Repository $repository, string $rerun_url, int $run_attempt, int $run_number, string $run_started_at, string $status, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\TriggeringActor $triggering_actor, string $updated_at, string $url, int $workflow_id, string $workflow_url)
    {
        $this->actor = $actor;
        $this->artifacts_url = $artifacts_url;
        $this->cancel_url = $cancel_url;
        $this->check_suite_id = $check_suite_id;
        $this->check_suite_node_id = $check_suite_node_id;
        $this->check_suite_url = $check_suite_url;
        $this->conclusion = $conclusion;
        $this->created_at = $created_at;
        $this->display_title = $display_title;
        $this->event = $event;
        $this->head_branch = $head_branch;
        $this->head_commit = $head_commit;
        $this->head_repository = $head_repository;
        $this->head_sha = $head_sha;
        $this->html_url = $html_url;
        $this->id = $id;
        $this->jobs_url = $jobs_url;
        $this->logs_url = $logs_url;
        $this->name = $name;
        $this->node_id = $node_id;
        $this->path = $path;
        $this->previous_attempt_url = $previous_attempt_url;
        $this->pull_requests = $pull_requests;
        $this->referenced_workflows = $referenced_workflows;
        $this->repository = $repository;
        $this->rerun_url = $rerun_url;
        $this->run_attempt = $run_attempt;
        $this->run_number = $run_number;
        $this->run_started_at = $run_started_at;
        $this->status = $status;
        $this->triggering_actor = $triggering_actor;
        $this->updated_at = $updated_at;
        $this->url = $url;
        $this->workflow_id = $workflow_id;
        $this->workflow_url = $workflow_url;
    }
}
