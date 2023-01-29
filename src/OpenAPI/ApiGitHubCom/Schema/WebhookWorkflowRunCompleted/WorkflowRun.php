<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookWorkflowRunCompleted;

final class WorkflowRun
{
    public const SCHEMA_JSON = '{"title":"Workflow Run","required":["artifacts_url","cancel_url","check_suite_url","check_suite_id","check_suite_node_id","conclusion","created_at","event","head_branch","head_commit","head_repository","head_sha","html_url","id","jobs_url","logs_url","node_id","name","path","pull_requests","repository","rerun_url","run_number","status","updated_at","url","workflow_id","workflow_url","run_attempt","run_started_at","previous_attempt_url","actor","triggering_actor"],"type":"object","properties":{"actor":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"artifacts_url":{"type":"string","format":"uri"},"cancel_url":{"type":"string","format":"uri"},"check_suite_id":{"type":"integer"},"check_suite_node_id":{"type":"string"},"check_suite_url":{"type":"string","format":"uri"},"conclusion":{"enum":["success","failure","neutral","cancelled","timed_out","action_required","stale",null,"skipped"],"type":["string","null"]},"created_at":{"type":"string","format":"date-time"},"event":{"type":"string"},"head_branch":{"type":["string","null"]},"head_commit":{"title":"SimpleCommit","required":["id","tree_id","message","timestamp","author","committer"],"type":"object","properties":{"author":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"committer":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"id":{"type":"string"},"message":{"type":"string"},"timestamp":{"type":"string"},"tree_id":{"type":"string"}}},"head_repository":{"title":"Repository Lite","required":["archive_url","assignees_url","blobs_url","branches_url","collaborators_url","comments_url","commits_url","compare_url","contents_url","contributors_url","deployments_url","description","downloads_url","events_url","fork","forks_url","full_name","git_commits_url","git_refs_url","git_tags_url","hooks_url","html_url","id","issue_comment_url","issue_events_url","issues_url","keys_url","labels_url","languages_url","merges_url","milestones_url","name","node_id","notifications_url","owner","private","pulls_url","releases_url","stargazers_url","statuses_url","subscribers_url","subscription_url","tags_url","teams_url","trees_url","url"],"type":"object","properties":{"archive_url":{"type":"string","format":"uri-template"},"assignees_url":{"type":"string","format":"uri-template"},"blobs_url":{"type":"string","format":"uri-template"},"branches_url":{"type":"string","format":"uri-template"},"collaborators_url":{"type":"string","format":"uri-template"},"comments_url":{"type":"string","format":"uri-template"},"commits_url":{"type":"string","format":"uri-template"},"compare_url":{"type":"string","format":"uri-template"},"contents_url":{"type":"string","format":"uri-template"},"contributors_url":{"type":"string","format":"uri"},"deployments_url":{"type":"string","format":"uri"},"description":{"type":["string","null"]},"downloads_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri"},"fork":{"type":"boolean"},"forks_url":{"type":"string","format":"uri"},"full_name":{"type":"string"},"git_commits_url":{"type":"string","format":"uri-template"},"git_refs_url":{"type":"string","format":"uri-template"},"git_tags_url":{"type":"string","format":"uri-template"},"hooks_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the repository"},"issue_comment_url":{"type":"string","format":"uri-template"},"issue_events_url":{"type":"string","format":"uri-template"},"issues_url":{"type":"string","format":"uri-template"},"keys_url":{"type":"string","format":"uri-template"},"labels_url":{"type":"string","format":"uri-template"},"languages_url":{"type":"string","format":"uri"},"merges_url":{"type":"string","format":"uri"},"milestones_url":{"type":"string","format":"uri-template"},"name":{"type":"string","description":"The name of the repository."},"node_id":{"type":"string"},"notifications_url":{"type":"string","format":"uri-template"},"owner":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"private":{"type":"boolean","description":"Whether the repository is private or public."},"pulls_url":{"type":"string","format":"uri-template"},"releases_url":{"type":"string","format":"uri-template"},"stargazers_url":{"type":"string","format":"uri"},"statuses_url":{"type":"string","format":"uri-template"},"subscribers_url":{"type":"string","format":"uri"},"subscription_url":{"type":"string","format":"uri"},"tags_url":{"type":"string","format":"uri"},"teams_url":{"type":"string","format":"uri"},"trees_url":{"type":"string","format":"uri-template"},"url":{"type":"string","format":"uri"}}},"head_sha":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"jobs_url":{"type":"string","format":"uri"},"logs_url":{"type":"string","format":"uri"},"name":{"type":["string","null"]},"node_id":{"type":"string"},"path":{"type":"string"},"previous_attempt_url":{"type":["string","null"],"format":"uri"},"pull_requests":{"type":"array","items":{"required":["url","id","number","head","base"],"type":"object","properties":{"base":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"head":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"id":{"type":"number"},"number":{"type":"number"},"url":{"type":"string","format":"uri"}}}},"referenced_workflows":{"type":["array","null"],"items":{"required":["path","sha"],"type":"object","properties":{"path":{"type":"string"},"ref":{"type":"string"},"sha":{"type":"string"}}}},"repository":{"title":"Repository Lite","required":["archive_url","assignees_url","blobs_url","branches_url","collaborators_url","comments_url","commits_url","compare_url","contents_url","contributors_url","deployments_url","description","downloads_url","events_url","fork","forks_url","full_name","git_commits_url","git_refs_url","git_tags_url","hooks_url","html_url","id","issue_comment_url","issue_events_url","issues_url","keys_url","labels_url","languages_url","merges_url","milestones_url","name","node_id","notifications_url","owner","private","pulls_url","releases_url","stargazers_url","statuses_url","subscribers_url","subscription_url","tags_url","teams_url","trees_url","url"],"type":"object","properties":{"archive_url":{"type":"string","format":"uri-template"},"assignees_url":{"type":"string","format":"uri-template"},"blobs_url":{"type":"string","format":"uri-template"},"branches_url":{"type":"string","format":"uri-template"},"collaborators_url":{"type":"string","format":"uri-template"},"comments_url":{"type":"string","format":"uri-template"},"commits_url":{"type":"string","format":"uri-template"},"compare_url":{"type":"string","format":"uri-template"},"contents_url":{"type":"string","format":"uri-template"},"contributors_url":{"type":"string","format":"uri"},"deployments_url":{"type":"string","format":"uri"},"description":{"type":["string","null"]},"downloads_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri"},"fork":{"type":"boolean"},"forks_url":{"type":"string","format":"uri"},"full_name":{"type":"string"},"git_commits_url":{"type":"string","format":"uri-template"},"git_refs_url":{"type":"string","format":"uri-template"},"git_tags_url":{"type":"string","format":"uri-template"},"hooks_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the repository"},"issue_comment_url":{"type":"string","format":"uri-template"},"issue_events_url":{"type":"string","format":"uri-template"},"issues_url":{"type":"string","format":"uri-template"},"keys_url":{"type":"string","format":"uri-template"},"labels_url":{"type":"string","format":"uri-template"},"languages_url":{"type":"string","format":"uri"},"merges_url":{"type":"string","format":"uri"},"milestones_url":{"type":"string","format":"uri-template"},"name":{"type":"string","description":"The name of the repository."},"node_id":{"type":"string"},"notifications_url":{"type":"string","format":"uri-template"},"owner":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"private":{"type":"boolean","description":"Whether the repository is private or public."},"pulls_url":{"type":"string","format":"uri-template"},"releases_url":{"type":"string","format":"uri-template"},"stargazers_url":{"type":"string","format":"uri"},"statuses_url":{"type":"string","format":"uri-template"},"subscribers_url":{"type":"string","format":"uri"},"subscription_url":{"type":"string","format":"uri"},"tags_url":{"type":"string","format":"uri"},"teams_url":{"type":"string","format":"uri"},"trees_url":{"type":"string","format":"uri-template"},"url":{"type":"string","format":"uri"}}},"rerun_url":{"type":"string","format":"uri"},"run_attempt":{"type":"integer"},"run_number":{"type":"integer"},"run_started_at":{"type":"string","format":"date-time"},"status":{"enum":["requested","in_progress","completed","queued","pending","waiting"],"type":"string"},"triggering_actor":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"},"workflow_id":{"type":"integer"},"workflow_url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Workflow Run';
    public const SCHEMA_DESCRIPTION = '';
    public readonly array $actor;
    public readonly string $artifacts_url;
    public readonly string $cancel_url;
    public readonly int $check_suite_id;
    public readonly string $check_suite_node_id;
    public readonly string $check_suite_url;
    public readonly ?string $conclusion;
    public readonly string $created_at;
    public readonly string $event;
    public readonly ?string $head_branch;
    public readonly array $head_commit;
    public readonly array $head_repository;
    public readonly string $head_sha;
    public readonly string $html_url;
    public readonly int $id;
    public readonly string $jobs_url;
    public readonly string $logs_url;
    public readonly ?string $name;
    public readonly string $node_id;
    public readonly string $path;
    public readonly ?string $previous_attempt_url;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\PullRequests>
     */
    public readonly array $pull_requests;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\ReferencedWorkflows>
     */
    public readonly array $referenced_workflows;
    public readonly array $repository;
    public readonly string $rerun_url;
    public readonly int $run_attempt;
    public readonly int $run_number;
    public readonly string $run_started_at;
    public readonly string $status;
    public readonly array $triggering_actor;
    public readonly string $updated_at;
    public readonly string $url;
    public readonly int $workflow_id;
    public readonly string $workflow_url;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\PullRequests> $pull_requests
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\ReferencedWorkflows> $referenced_workflows
     */
    public function __construct(array $actor, string $artifacts_url, string $cancel_url, int $check_suite_id, string $check_suite_node_id, string $check_suite_url, string $conclusion, string $created_at, string $event, string $head_branch, array $head_commit, array $head_repository, string $head_sha, string $html_url, int $id, string $jobs_url, string $logs_url, string $name, string $node_id, string $path, string $previous_attempt_url, array $pull_requests, array $referenced_workflows, array $repository, string $rerun_url, int $run_attempt, int $run_number, string $run_started_at, string $status, array $triggering_actor, string $updated_at, string $url, int $workflow_id, string $workflow_url)
    {
        $this->actor = $actor;
        $this->artifacts_url = $artifacts_url;
        $this->cancel_url = $cancel_url;
        $this->check_suite_id = $check_suite_id;
        $this->check_suite_node_id = $check_suite_node_id;
        $this->check_suite_url = $check_suite_url;
        $this->conclusion = $conclusion;
        $this->created_at = $created_at;
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
