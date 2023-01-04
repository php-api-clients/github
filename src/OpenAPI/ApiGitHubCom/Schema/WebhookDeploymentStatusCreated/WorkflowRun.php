<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookDeploymentStatusCreated;

final class WorkflowRun
{
    public const SCHEMA_JSON = '{"title":"Deployment Workflow Run","required":["id","name","node_id","head_branch","head_sha","run_number","event","status","conclusion","workflow_id","check_suite_id","check_suite_node_id","url","html_url","path","pull_requests","created_at","updated_at","actor","triggering_actor","run_attempt","run_started_at","display_title"],"type":["object","null"],"properties":{"actor":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"artifacts_url":{"type":"string"},"cancel_url":{"type":"string"},"check_suite_id":{"type":"integer"},"check_suite_node_id":{"type":"string"},"check_suite_url":{"type":"string"},"conclusion":{"enum":["success","failure","neutral","cancelled","timed_out","action_required","stale",null,"startup_failure"],"type":["string","null"]},"created_at":{"type":"string","format":"date-time"},"display_title":{"type":"string"},"event":{"type":"string"},"head_branch":{"type":"string"},"head_commit":{"type":["null"]},"head_repository":{"type":"object","properties":{"archive_url":{"type":"string"},"assignees_url":{"type":"string"},"blobs_url":{"type":"string"},"branches_url":{"type":"string"},"collaborators_url":{"type":"string"},"comments_url":{"type":"string"},"commits_url":{"type":"string"},"compare_url":{"type":"string"},"contents_url":{"type":"string"},"contributors_url":{"type":"string"},"deployments_url":{"type":"string"},"description":{"type":["null"]},"downloads_url":{"type":"string"},"events_url":{"type":"string"},"fork":{"type":"boolean"},"forks_url":{"type":"string"},"full_name":{"type":"string"},"git_commits_url":{"type":"string"},"git_refs_url":{"type":"string"},"git_tags_url":{"type":"string"},"hooks_url":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"issue_comment_url":{"type":"string"},"issue_events_url":{"type":"string"},"issues_url":{"type":"string"},"keys_url":{"type":"string"},"labels_url":{"type":"string"},"languages_url":{"type":"string"},"merges_url":{"type":"string"},"milestones_url":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"notifications_url":{"type":"string"},"owner":{"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"private":{"type":"boolean"},"pulls_url":{"type":"string"},"releases_url":{"type":"string"},"stargazers_url":{"type":"string"},"statuses_url":{"type":"string"},"subscribers_url":{"type":"string"},"subscription_url":{"type":"string"},"tags_url":{"type":"string"},"teams_url":{"type":"string"},"trees_url":{"type":"string"},"url":{"type":"string"}}},"head_sha":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"jobs_url":{"type":"string"},"logs_url":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"path":{"type":"string"},"previous_attempt_url":{"type":["null"]},"pull_requests":{"type":"array","items":{"title":"Check Run Pull Request","required":["url","id","number","head","base"],"type":"object","properties":{"base":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"head":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"id":{"type":"integer"},"number":{"type":"integer"},"url":{"type":"string","format":"uri"}}}},"referenced_workflows":{"type":["array","null"],"items":{"required":["path","sha"],"type":"object","properties":{"path":{"type":"string"},"ref":{"type":"string"},"sha":{"type":"string"}}}},"repository":{"type":"object","properties":{"archive_url":{"type":"string"},"assignees_url":{"type":"string"},"blobs_url":{"type":"string"},"branches_url":{"type":"string"},"collaborators_url":{"type":"string"},"comments_url":{"type":"string"},"commits_url":{"type":"string"},"compare_url":{"type":"string"},"contents_url":{"type":"string"},"contributors_url":{"type":"string"},"deployments_url":{"type":"string"},"description":{"type":["null"]},"downloads_url":{"type":"string"},"events_url":{"type":"string"},"fork":{"type":"boolean"},"forks_url":{"type":"string"},"full_name":{"type":"string"},"git_commits_url":{"type":"string"},"git_refs_url":{"type":"string"},"git_tags_url":{"type":"string"},"hooks_url":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"issue_comment_url":{"type":"string"},"issue_events_url":{"type":"string"},"issues_url":{"type":"string"},"keys_url":{"type":"string"},"labels_url":{"type":"string"},"languages_url":{"type":"string"},"merges_url":{"type":"string"},"milestones_url":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"notifications_url":{"type":"string"},"owner":{"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"private":{"type":"boolean"},"pulls_url":{"type":"string"},"releases_url":{"type":"string"},"stargazers_url":{"type":"string"},"statuses_url":{"type":"string"},"subscribers_url":{"type":"string"},"subscription_url":{"type":"string"},"tags_url":{"type":"string"},"teams_url":{"type":"string"},"trees_url":{"type":"string"},"url":{"type":"string"}}},"rerun_url":{"type":"string"},"run_attempt":{"type":"integer"},"run_number":{"type":"integer"},"run_started_at":{"type":"string","format":"date-time"},"status":{"enum":["requested","in_progress","completed","queued","waiting","pending"],"type":"string"},"triggering_actor":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"},"workflow_id":{"type":"integer"},"workflow_url":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Deployment Workflow Run';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\Actor::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\Actor $actor;
    private ?string $artifacts_url = null;
    private ?string $cancel_url = null;
    private int $check_suite_id;
    private string $check_suite_node_id;
    private ?string $check_suite_url = null;
    private ?string $conclusion;
    private string $created_at;
    private string $display_title;
    private string $event;
    private string $head_branch;
    private $head_commit;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\HeadRepository::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\HeadRepository $head_repository = null;
    private string $head_sha;
    private string $html_url;
    private int $id;
    private ?string $jobs_url = null;
    private ?string $logs_url = null;
    private string $name;
    private string $node_id;
    private string $path;
    private $previous_attempt_url;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\PullRequests>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\PullRequests::class)
     */
    private array $pull_requests = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\ReferencedWorkflows>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\ReferencedWorkflows::class)
     */
    private array $referenced_workflows = array();
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\Repository::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\Repository $repository = null;
    private ?string $rerun_url = null;
    private int $run_attempt;
    private int $run_number;
    private string $run_started_at;
    private string $status;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\TriggeringActor::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\TriggeringActor $triggering_actor;
    private string $updated_at;
    private string $url;
    private int $workflow_id;
    private ?string $workflow_url = null;
    public function actor() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\Actor
    {
        return $this->actor;
    }
    public function artifacts_url() : ?string
    {
        return $this->artifacts_url;
    }
    public function cancel_url() : ?string
    {
        return $this->cancel_url;
    }
    public function check_suite_id() : int
    {
        return $this->check_suite_id;
    }
    public function check_suite_node_id() : string
    {
        return $this->check_suite_node_id;
    }
    public function check_suite_url() : ?string
    {
        return $this->check_suite_url;
    }
    public function conclusion() : ?string
    {
        return $this->conclusion;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function display_title() : string
    {
        return $this->display_title;
    }
    public function event() : string
    {
        return $this->event;
    }
    public function head_branch() : string
    {
        return $this->head_branch;
    }
    public function head_commit()
    {
        return $this->head_commit;
    }
    public function head_repository() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\HeadRepository
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
    public function jobs_url() : ?string
    {
        return $this->jobs_url;
    }
    public function logs_url() : ?string
    {
        return $this->logs_url;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function path() : string
    {
        return $this->path;
    }
    public function previous_attempt_url()
    {
        return $this->previous_attempt_url;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\PullRequests>
     */
    public function pull_requests() : array
    {
        return $this->pull_requests;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\ReferencedWorkflows>
     */
    public function referenced_workflows() : array
    {
        return $this->referenced_workflows;
    }
    public function repository() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\Repository
    {
        return $this->repository;
    }
    public function rerun_url() : ?string
    {
        return $this->rerun_url;
    }
    public function run_attempt() : int
    {
        return $this->run_attempt;
    }
    public function run_number() : int
    {
        return $this->run_number;
    }
    public function run_started_at() : string
    {
        return $this->run_started_at;
    }
    public function status() : string
    {
        return $this->status;
    }
    public function triggering_actor() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun\TriggeringActor
    {
        return $this->triggering_actor;
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
    public function workflow_url() : ?string
    {
        return $this->workflow_url;
    }
}
