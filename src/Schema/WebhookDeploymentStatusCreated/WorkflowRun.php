<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookDeploymentStatusCreated;

use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\WebhookDeploymentStatusCreated\WorkflowRun\PullRequests;
use ApiClients\Client\GitHub\Schema\WebhookDeploymentStatusCreated\WorkflowRun\ReferencedWorkflows;
use EventSauce\ObjectHydrator\MapFrom;
use EventSauce\ObjectHydrator\PropertyCasters\CastListToType;

final readonly class WorkflowRun
{
    public const SCHEMA_JSON         = '{"title":"Deployment Workflow Run","required":["id","name","node_id","head_branch","head_sha","run_number","event","status","conclusion","workflow_id","check_suite_id","check_suite_node_id","url","html_url","path","pull_requests","created_at","updated_at","actor","triggering_actor","run_attempt","run_started_at","display_title"],"type":["object","null"],"properties":{"actor":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"artifacts_url":{"type":"string"},"cancel_url":{"type":"string"},"check_suite_id":{"type":"integer"},"check_suite_node_id":{"type":"string"},"check_suite_url":{"type":"string"},"conclusion":{"enum":["success","failure","neutral","cancelled","timed_out","action_required","stale",null,"startup_failure"],"type":["string","null"]},"created_at":{"type":"string","format":"date-time"},"display_title":{"type":"string"},"event":{"type":"string"},"head_branch":{"type":"string"},"head_commit":{"type":["null"]},"head_repository":{"type":"object","properties":{"archive_url":{"type":"string"},"assignees_url":{"type":"string"},"blobs_url":{"type":"string"},"branches_url":{"type":"string"},"collaborators_url":{"type":"string"},"comments_url":{"type":"string"},"commits_url":{"type":"string"},"compare_url":{"type":"string"},"contents_url":{"type":"string"},"contributors_url":{"type":"string"},"deployments_url":{"type":"string"},"description":{"type":["null"]},"downloads_url":{"type":"string"},"events_url":{"type":"string"},"fork":{"type":"boolean"},"forks_url":{"type":"string"},"full_name":{"type":"string"},"git_commits_url":{"type":"string"},"git_refs_url":{"type":"string"},"git_tags_url":{"type":"string"},"hooks_url":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"issue_comment_url":{"type":"string"},"issue_events_url":{"type":"string"},"issues_url":{"type":"string"},"keys_url":{"type":"string"},"labels_url":{"type":"string"},"languages_url":{"type":"string"},"merges_url":{"type":"string"},"milestones_url":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"notifications_url":{"type":"string"},"owner":{"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"private":{"type":"boolean"},"pulls_url":{"type":"string"},"releases_url":{"type":"string"},"stargazers_url":{"type":"string"},"statuses_url":{"type":"string"},"subscribers_url":{"type":"string"},"subscription_url":{"type":"string"},"tags_url":{"type":"string"},"teams_url":{"type":"string"},"trees_url":{"type":"string"},"url":{"type":"string"}}},"head_sha":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"jobs_url":{"type":"string"},"logs_url":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"path":{"type":"string"},"previous_attempt_url":{"type":["null"]},"pull_requests":{"type":"array","items":{"title":"Check Run Pull Request","required":["url","id","number","head","base"],"type":"object","properties":{"base":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"head":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"id":{"type":"integer"},"number":{"type":"integer"},"url":{"type":"string","format":"uri"}}}},"referenced_workflows":{"type":["array","null"],"items":{"required":["path","sha"],"type":"object","properties":{"path":{"type":"string"},"ref":{"type":"string"},"sha":{"type":"string"}}}},"repository":{"type":"object","properties":{"archive_url":{"type":"string"},"assignees_url":{"type":"string"},"blobs_url":{"type":"string"},"branches_url":{"type":"string"},"collaborators_url":{"type":"string"},"comments_url":{"type":"string"},"commits_url":{"type":"string"},"compare_url":{"type":"string"},"contents_url":{"type":"string"},"contributors_url":{"type":"string"},"deployments_url":{"type":"string"},"description":{"type":["null"]},"downloads_url":{"type":"string"},"events_url":{"type":"string"},"fork":{"type":"boolean"},"forks_url":{"type":"string"},"full_name":{"type":"string"},"git_commits_url":{"type":"string"},"git_refs_url":{"type":"string"},"git_tags_url":{"type":"string"},"hooks_url":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"issue_comment_url":{"type":"string"},"issue_events_url":{"type":"string"},"issues_url":{"type":"string"},"keys_url":{"type":"string"},"labels_url":{"type":"string"},"languages_url":{"type":"string"},"merges_url":{"type":"string"},"milestones_url":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"notifications_url":{"type":"string"},"owner":{"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"private":{"type":"boolean"},"pulls_url":{"type":"string"},"releases_url":{"type":"string"},"stargazers_url":{"type":"string"},"statuses_url":{"type":"string"},"subscribers_url":{"type":"string"},"subscription_url":{"type":"string"},"tags_url":{"type":"string"},"teams_url":{"type":"string"},"trees_url":{"type":"string"},"url":{"type":"string"}}},"rerun_url":{"type":"string"},"run_attempt":{"type":"integer"},"run_number":{"type":"integer"},"run_started_at":{"type":"string","format":"date-time"},"status":{"enum":["requested","in_progress","completed","queued","waiting","pending"],"type":"string"},"triggering_actor":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"},"workflow_id":{"type":"integer"},"workflow_url":{"type":"string"}}}';
    public const SCHEMA_TITLE        = 'Deployment Workflow Run';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"actor":{"avatar_url":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","events_url":"generated_events_url_uri-template","followers_url":"https:\\/\\/example.com\\/","following_url":"generated_following_url_uri-template","gists_url":"generated_gists_url_uri-template","gravatar_id":"generated_gravatar_id_null","html_url":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","node_id":"generated_node_id_null","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated_starred_url_uri-template","subscriptions_url":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"},"artifacts_url":"generated_artifacts_url_null","cancel_url":"generated_cancel_url_null","check_suite_id":13,"check_suite_node_id":"generated_check_suite_node_id_null","check_suite_url":"generated_check_suite_url_null","conclusion":"success","created_at":"1970-01-01T00:00:00+00:00","display_title":"generated_display_title_null","event":"generated_event_null","head_branch":"generated_head_branch_null","head_commit":null,"head_repository":{"archive_url":"generated_archive_url_null","assignees_url":"generated_assignees_url_null","blobs_url":"generated_blobs_url_null","branches_url":"generated_branches_url_null","collaborators_url":"generated_collaborators_url_null","comments_url":"generated_comments_url_null","commits_url":"generated_commits_url_null","compare_url":"generated_compare_url_null","contents_url":"generated_contents_url_null","contributors_url":"generated_contributors_url_null","deployments_url":"generated_deployments_url_null","description":null,"downloads_url":"generated_downloads_url_null","events_url":"generated_events_url_null","fork":false,"forks_url":"generated_forks_url_null","full_name":"generated_full_name_null","git_commits_url":"generated_git_commits_url_null","git_refs_url":"generated_git_refs_url_null","git_tags_url":"generated_git_tags_url_null","hooks_url":"generated_hooks_url_null","html_url":"generated_html_url_null","id":13,"issue_comment_url":"generated_issue_comment_url_null","issue_events_url":"generated_issue_events_url_null","issues_url":"generated_issues_url_null","keys_url":"generated_keys_url_null","labels_url":"generated_labels_url_null","languages_url":"generated_languages_url_null","merges_url":"generated_merges_url_null","milestones_url":"generated_milestones_url_null","name":"generated_name_null","node_id":"generated_node_id_null","notifications_url":"generated_notifications_url_null","owner":{"avatar_url":"generated_avatar_url_null","events_url":"generated_events_url_null","followers_url":"generated_followers_url_null","following_url":"generated_following_url_null","gists_url":"generated_gists_url_null","gravatar_id":"generated_gravatar_id_null","html_url":"generated_html_url_null","id":13,"login":"generated_login_null","node_id":"generated_node_id_null","organizations_url":"generated_organizations_url_null","received_events_url":"generated_received_events_url_null","repos_url":"generated_repos_url_null","site_admin":false,"starred_url":"generated_starred_url_null","subscriptions_url":"generated_subscriptions_url_null","type":"generated_type_null","url":"generated_url_null"},"private":false,"pulls_url":"generated_pulls_url_null","releases_url":"generated_releases_url_null","stargazers_url":"generated_stargazers_url_null","statuses_url":"generated_statuses_url_null","subscribers_url":"generated_subscribers_url_null","subscription_url":"generated_subscription_url_null","tags_url":"generated_tags_url_null","teams_url":"generated_teams_url_null","trees_url":"generated_trees_url_null","url":"generated_url_null"},"head_sha":"generated_head_sha_null","html_url":"https:\\/\\/example.com\\/","id":13,"jobs_url":"generated_jobs_url_null","logs_url":"generated_logs_url_null","name":"generated_name_null","node_id":"generated_node_id_null","path":"generated_path_null","previous_attempt_url":null,"pull_requests":[{"base":{"ref":"generated_ref_null","repo":{"id":13,"name":"generated_name_null","url":"https:\\/\\/example.com\\/"},"sha":"generated_sha_null"},"head":{"ref":"generated_ref_null","repo":{"id":13,"name":"generated_name_null","url":"https:\\/\\/example.com\\/"},"sha":"generated_sha_null"},"id":13,"number":13,"url":"https:\\/\\/example.com\\/"}],"referenced_workflows":[{"path":"generated_path_null","ref":"generated_ref_null","sha":"generated_sha_null"}],"repository":{"archive_url":"generated_archive_url_null","assignees_url":"generated_assignees_url_null","blobs_url":"generated_blobs_url_null","branches_url":"generated_branches_url_null","collaborators_url":"generated_collaborators_url_null","comments_url":"generated_comments_url_null","commits_url":"generated_commits_url_null","compare_url":"generated_compare_url_null","contents_url":"generated_contents_url_null","contributors_url":"generated_contributors_url_null","deployments_url":"generated_deployments_url_null","description":null,"downloads_url":"generated_downloads_url_null","events_url":"generated_events_url_null","fork":false,"forks_url":"generated_forks_url_null","full_name":"generated_full_name_null","git_commits_url":"generated_git_commits_url_null","git_refs_url":"generated_git_refs_url_null","git_tags_url":"generated_git_tags_url_null","hooks_url":"generated_hooks_url_null","html_url":"generated_html_url_null","id":13,"issue_comment_url":"generated_issue_comment_url_null","issue_events_url":"generated_issue_events_url_null","issues_url":"generated_issues_url_null","keys_url":"generated_keys_url_null","labels_url":"generated_labels_url_null","languages_url":"generated_languages_url_null","merges_url":"generated_merges_url_null","milestones_url":"generated_milestones_url_null","name":"generated_name_null","node_id":"generated_node_id_null","notifications_url":"generated_notifications_url_null","owner":{"avatar_url":"generated_avatar_url_null","events_url":"generated_events_url_null","followers_url":"generated_followers_url_null","following_url":"generated_following_url_null","gists_url":"generated_gists_url_null","gravatar_id":"generated_gravatar_id_null","html_url":"generated_html_url_null","id":13,"login":"generated_login_null","node_id":"generated_node_id_null","organizations_url":"generated_organizations_url_null","received_events_url":"generated_received_events_url_null","repos_url":"generated_repos_url_null","site_admin":false,"starred_url":"generated_starred_url_null","subscriptions_url":"generated_subscriptions_url_null","type":"generated_type_null","url":"generated_url_null"},"private":false,"pulls_url":"generated_pulls_url_null","releases_url":"generated_releases_url_null","stargazers_url":"generated_stargazers_url_null","statuses_url":"generated_statuses_url_null","subscribers_url":"generated_subscribers_url_null","subscription_url":"generated_subscription_url_null","tags_url":"generated_tags_url_null","teams_url":"generated_teams_url_null","trees_url":"generated_trees_url_null","url":"generated_url_null"},"rerun_url":"generated_rerun_url_null","run_attempt":13,"run_number":13,"run_started_at":"1970-01-01T00:00:00+00:00","status":"requested","triggering_actor":{"avatar_url":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","events_url":"generated_events_url_uri-template","followers_url":"https:\\/\\/example.com\\/","following_url":"generated_following_url_uri-template","gists_url":"generated_gists_url_uri-template","gravatar_id":"generated_gravatar_id_null","html_url":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","node_id":"generated_node_id_null","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated_starred_url_uri-template","subscriptions_url":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"},"updated_at":"1970-01-01T00:00:00+00:00","url":"https:\\/\\/example.com\\/","workflow_id":13,"workflow_url":"generated_workflow_url_null"}';

    /**
     * @param array<PullRequests>         $pullRequests
     * @param ?array<ReferencedWorkflows> $referencedWorkflows
     */
    public function __construct(public ?Schema\WebhookDeploymentStatusCreated\WorkflowRun\Actor $actor, #[MapFrom('artifacts_url')] public ?string $artifactsUrl, #[MapFrom('cancel_url')] public ?string $cancelUrl, #[MapFrom('check_suite_id')] public int $checkSuiteId, #[MapFrom('check_suite_node_id')] public string $checkSuiteNodeId, #[MapFrom('check_suite_url')] public ?string $checkSuiteUrl, public ?string $conclusion, #[MapFrom('created_at')] public string $createdAt, #[MapFrom('display_title')] public string $displayTitle, public string $event, #[MapFrom('head_branch')] public string $headBranch, #[MapFrom('head_commit')] public mixed $headCommit, #[MapFrom('head_repository')] public ?Schema\WebhookDeploymentStatusCreated\WorkflowRun\HeadRepository $headRepository, #[MapFrom('head_sha')] public string $headSha, #[MapFrom('html_url')] public string $htmlUrl, public int $id, #[MapFrom('jobs_url')] public ?string $jobsUrl, #[MapFrom('logs_url')] public ?string $logsUrl, public string $name, #[MapFrom('node_id')] public string $nodeId, public string $path, #[MapFrom('previous_attempt_url')] public mixed $previousAttemptUrl, #[MapFrom('pull_requests')] #[CastListToType(Schema\WebhookDeploymentStatusCreated\WorkflowRun\PullRequests::class)] public array $pullRequests, #[MapFrom('referenced_workflows')] #[CastListToType(Schema\WebhookDeploymentStatusCreated\WorkflowRun\ReferencedWorkflows::class)] public ?array $referencedWorkflows, public ?Schema\WebhookDeploymentStatusCreated\WorkflowRun\Repository $repository, #[MapFrom('rerun_url')] public ?string $rerunUrl, #[MapFrom('run_attempt')] public int $runAttempt, #[MapFrom('run_number')] public int $runNumber, #[MapFrom('run_started_at')] public string $runStartedAt, public string $status, #[MapFrom('triggering_actor')] public ?Schema\WebhookDeploymentStatusCreated\WorkflowRun\TriggeringActor $triggeringActor, #[MapFrom('updated_at')] public string $updatedAt, public string $url, #[MapFrom('workflow_id')] public int $workflowId, #[MapFrom('workflow_url')] public ?string $workflowUrl)
    {
    }
}
