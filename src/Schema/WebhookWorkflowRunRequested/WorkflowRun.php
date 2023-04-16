<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookWorkflowRunRequested;

use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\WebhookWorkflowRunRequested\WorkflowRun\PullRequests;
use ApiClients\Client\GitHub\Schema\WebhookWorkflowRunRequested\WorkflowRun\ReferencedWorkflows;
use EventSauce\ObjectHydrator\MapFrom;
use EventSauce\ObjectHydrator\PropertyCasters\CastListToType;

final readonly class WorkflowRun
{
    public const SCHEMA_JSON         = '{"title":"Workflow Run","required":["artifacts_url","cancel_url","check_suite_url","check_suite_id","check_suite_node_id","conclusion","created_at","event","head_branch","head_commit","head_repository","head_sha","html_url","id","jobs_url","logs_url","node_id","name","path","pull_requests","repository","rerun_url","run_number","status","updated_at","url","workflow_id","workflow_url","run_attempt","run_started_at","previous_attempt_url","actor","triggering_actor","display_title"],"type":"object","properties":{"actor":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"artifacts_url":{"type":"string","format":"uri"},"cancel_url":{"type":"string","format":"uri"},"check_suite_id":{"type":"integer"},"check_suite_node_id":{"type":"string"},"check_suite_url":{"type":"string","format":"uri"},"conclusion":{"enum":["success","failure","neutral","cancelled","timed_out","action_required","stale",null,"skipped","startup_failure"],"type":["string","null"]},"created_at":{"type":"string","format":"date-time"},"event":{"type":"string"},"head_branch":{"type":["string","null"]},"head_commit":{"title":"SimpleCommit","required":["id","tree_id","message","timestamp","author","committer"],"type":"object","properties":{"author":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"committer":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"id":{"type":"string"},"message":{"type":"string"},"timestamp":{"type":"string"},"tree_id":{"type":"string"}}},"head_repository":{"title":"Repository Lite","required":["archive_url","assignees_url","blobs_url","branches_url","collaborators_url","comments_url","commits_url","compare_url","contents_url","contributors_url","deployments_url","description","downloads_url","events_url","fork","forks_url","full_name","git_commits_url","git_refs_url","git_tags_url","hooks_url","html_url","id","issue_comment_url","issue_events_url","issues_url","keys_url","labels_url","languages_url","merges_url","milestones_url","name","node_id","notifications_url","owner","private","pulls_url","releases_url","stargazers_url","statuses_url","subscribers_url","subscription_url","tags_url","teams_url","trees_url","url"],"type":"object","properties":{"archive_url":{"type":"string","format":"uri-template"},"assignees_url":{"type":"string","format":"uri-template"},"blobs_url":{"type":"string","format":"uri-template"},"branches_url":{"type":"string","format":"uri-template"},"collaborators_url":{"type":"string","format":"uri-template"},"comments_url":{"type":"string","format":"uri-template"},"commits_url":{"type":"string","format":"uri-template"},"compare_url":{"type":"string","format":"uri-template"},"contents_url":{"type":"string","format":"uri-template"},"contributors_url":{"type":"string","format":"uri"},"deployments_url":{"type":"string","format":"uri"},"description":{"type":["string","null"]},"downloads_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri"},"fork":{"type":"boolean"},"forks_url":{"type":"string","format":"uri"},"full_name":{"type":"string"},"git_commits_url":{"type":"string","format":"uri-template"},"git_refs_url":{"type":"string","format":"uri-template"},"git_tags_url":{"type":"string","format":"uri-template"},"hooks_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the repository"},"issue_comment_url":{"type":"string","format":"uri-template"},"issue_events_url":{"type":"string","format":"uri-template"},"issues_url":{"type":"string","format":"uri-template"},"keys_url":{"type":"string","format":"uri-template"},"labels_url":{"type":"string","format":"uri-template"},"languages_url":{"type":"string","format":"uri"},"merges_url":{"type":"string","format":"uri"},"milestones_url":{"type":"string","format":"uri-template"},"name":{"type":"string","description":"The name of the repository."},"node_id":{"type":"string"},"notifications_url":{"type":"string","format":"uri-template"},"owner":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"private":{"type":"boolean","description":"Whether the repository is private or public."},"pulls_url":{"type":"string","format":"uri-template"},"releases_url":{"type":"string","format":"uri-template"},"stargazers_url":{"type":"string","format":"uri"},"statuses_url":{"type":"string","format":"uri-template"},"subscribers_url":{"type":"string","format":"uri"},"subscription_url":{"type":"string","format":"uri"},"tags_url":{"type":"string","format":"uri"},"teams_url":{"type":"string","format":"uri"},"trees_url":{"type":"string","format":"uri-template"},"url":{"type":"string","format":"uri"}}},"head_sha":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"jobs_url":{"type":"string","format":"uri"},"logs_url":{"type":"string","format":"uri"},"name":{"type":["string","null"]},"node_id":{"type":"string"},"path":{"type":"string"},"previous_attempt_url":{"type":["string","null"],"format":"uri"},"pull_requests":{"type":"array","items":{"required":["url","id","number","head","base"],"type":"object","properties":{"base":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"head":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"id":{"type":"number"},"number":{"type":"number"},"url":{"type":"string","format":"uri"}}}},"referenced_workflows":{"type":["array","null"],"items":{"required":["path","sha"],"type":"object","properties":{"path":{"type":"string"},"ref":{"type":"string"},"sha":{"type":"string"}}}},"repository":{"title":"Repository Lite","required":["archive_url","assignees_url","blobs_url","branches_url","collaborators_url","comments_url","commits_url","compare_url","contents_url","contributors_url","deployments_url","description","downloads_url","events_url","fork","forks_url","full_name","git_commits_url","git_refs_url","git_tags_url","hooks_url","html_url","id","issue_comment_url","issue_events_url","issues_url","keys_url","labels_url","languages_url","merges_url","milestones_url","name","node_id","notifications_url","owner","private","pulls_url","releases_url","stargazers_url","statuses_url","subscribers_url","subscription_url","tags_url","teams_url","trees_url","url"],"type":"object","properties":{"archive_url":{"type":"string","format":"uri-template"},"assignees_url":{"type":"string","format":"uri-template"},"blobs_url":{"type":"string","format":"uri-template"},"branches_url":{"type":"string","format":"uri-template"},"collaborators_url":{"type":"string","format":"uri-template"},"comments_url":{"type":"string","format":"uri-template"},"commits_url":{"type":"string","format":"uri-template"},"compare_url":{"type":"string","format":"uri-template"},"contents_url":{"type":"string","format":"uri-template"},"contributors_url":{"type":"string","format":"uri"},"deployments_url":{"type":"string","format":"uri"},"description":{"type":["string","null"]},"downloads_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri"},"fork":{"type":"boolean"},"forks_url":{"type":"string","format":"uri"},"full_name":{"type":"string"},"git_commits_url":{"type":"string","format":"uri-template"},"git_refs_url":{"type":"string","format":"uri-template"},"git_tags_url":{"type":"string","format":"uri-template"},"hooks_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the repository"},"issue_comment_url":{"type":"string","format":"uri-template"},"issue_events_url":{"type":"string","format":"uri-template"},"issues_url":{"type":"string","format":"uri-template"},"keys_url":{"type":"string","format":"uri-template"},"labels_url":{"type":"string","format":"uri-template"},"languages_url":{"type":"string","format":"uri"},"merges_url":{"type":"string","format":"uri"},"milestones_url":{"type":"string","format":"uri-template"},"name":{"type":"string","description":"The name of the repository."},"node_id":{"type":"string"},"notifications_url":{"type":"string","format":"uri-template"},"owner":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"private":{"type":"boolean","description":"Whether the repository is private or public."},"pulls_url":{"type":"string","format":"uri-template"},"releases_url":{"type":"string","format":"uri-template"},"stargazers_url":{"type":"string","format":"uri"},"statuses_url":{"type":"string","format":"uri-template"},"subscribers_url":{"type":"string","format":"uri"},"subscription_url":{"type":"string","format":"uri"},"tags_url":{"type":"string","format":"uri"},"teams_url":{"type":"string","format":"uri"},"trees_url":{"type":"string","format":"uri-template"},"url":{"type":"string","format":"uri"}}},"rerun_url":{"type":"string","format":"uri"},"run_attempt":{"type":"integer"},"run_number":{"type":"integer"},"run_started_at":{"type":"string","format":"date-time"},"status":{"enum":["requested","in_progress","completed","queued","pending","waiting"],"type":"string"},"triggering_actor":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"},"workflow_id":{"type":"integer"},"workflow_url":{"type":"string","format":"uri"},"display_title":{"type":"string"}}}';
    public const SCHEMA_TITLE        = 'Workflow Run';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"actor":{"avatar_url":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","events_url":"generated_events_url_uri-template","followers_url":"https:\\/\\/example.com\\/","following_url":"generated_following_url_uri-template","gists_url":"generated_gists_url_uri-template","gravatar_id":"generated_gravatar_id_null","html_url":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","node_id":"generated_node_id_null","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated_starred_url_uri-template","subscriptions_url":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"},"artifacts_url":"https:\\/\\/example.com\\/","cancel_url":"https:\\/\\/example.com\\/","check_suite_id":13,"check_suite_node_id":"generated_check_suite_node_id_null","check_suite_url":"https:\\/\\/example.com\\/","conclusion":"success","created_at":"1970-01-01T00:00:00+00:00","event":"generated_event_null","head_branch":"generated_head_branch_null","head_commit":{"author":{"date":"1970-01-01T00:00:00+00:00","email":"generated_email_email","name":"generated_name_null","username":"generated_username_null"},"committer":{"date":"1970-01-01T00:00:00+00:00","email":"generated_email_email","name":"generated_name_null","username":"generated_username_null"},"id":"generated_id_null","message":"generated_message_null","timestamp":"generated_timestamp_null","tree_id":"generated_tree_id_null"},"head_repository":{"archive_url":"generated_archive_url_uri-template","assignees_url":"generated_assignees_url_uri-template","blobs_url":"generated_blobs_url_uri-template","branches_url":"generated_branches_url_uri-template","collaborators_url":"generated_collaborators_url_uri-template","comments_url":"generated_comments_url_uri-template","commits_url":"generated_commits_url_uri-template","compare_url":"generated_compare_url_uri-template","contents_url":"generated_contents_url_uri-template","contributors_url":"https:\\/\\/example.com\\/","deployments_url":"https:\\/\\/example.com\\/","description":"generated_description_null","downloads_url":"https:\\/\\/example.com\\/","events_url":"https:\\/\\/example.com\\/","fork":false,"forks_url":"https:\\/\\/example.com\\/","full_name":"generated_full_name_null","git_commits_url":"generated_git_commits_url_uri-template","git_refs_url":"generated_git_refs_url_uri-template","git_tags_url":"generated_git_tags_url_uri-template","hooks_url":"https:\\/\\/example.com\\/","html_url":"https:\\/\\/example.com\\/","id":13,"issue_comment_url":"generated_issue_comment_url_uri-template","issue_events_url":"generated_issue_events_url_uri-template","issues_url":"generated_issues_url_uri-template","keys_url":"generated_keys_url_uri-template","labels_url":"generated_labels_url_uri-template","languages_url":"https:\\/\\/example.com\\/","merges_url":"https:\\/\\/example.com\\/","milestones_url":"generated_milestones_url_uri-template","name":"generated_name_null","node_id":"generated_node_id_null","notifications_url":"generated_notifications_url_uri-template","owner":{"avatar_url":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","events_url":"generated_events_url_uri-template","followers_url":"https:\\/\\/example.com\\/","following_url":"generated_following_url_uri-template","gists_url":"generated_gists_url_uri-template","gravatar_id":"generated_gravatar_id_null","html_url":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","node_id":"generated_node_id_null","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated_starred_url_uri-template","subscriptions_url":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"},"private":false,"pulls_url":"generated_pulls_url_uri-template","releases_url":"generated_releases_url_uri-template","stargazers_url":"https:\\/\\/example.com\\/","statuses_url":"generated_statuses_url_uri-template","subscribers_url":"https:\\/\\/example.com\\/","subscription_url":"https:\\/\\/example.com\\/","tags_url":"https:\\/\\/example.com\\/","teams_url":"https:\\/\\/example.com\\/","trees_url":"generated_trees_url_uri-template","url":"https:\\/\\/example.com\\/"},"head_sha":"generated_head_sha_null","html_url":"https:\\/\\/example.com\\/","id":13,"jobs_url":"https:\\/\\/example.com\\/","logs_url":"https:\\/\\/example.com\\/","name":"generated_name_null","node_id":"generated_node_id_null","path":"generated_path_null","previous_attempt_url":"https:\\/\\/example.com\\/","pull_requests":[{"base":{"ref":"generated_ref_null","repo":{"id":13,"name":"generated_name_null","url":"https:\\/\\/example.com\\/"},"sha":"generated_sha_null"},"head":{"ref":"generated_ref_null","repo":{"id":13,"name":"generated_name_null","url":"https:\\/\\/example.com\\/"},"sha":"generated_sha_null"},"id":13.13,"number":13.13,"url":"https:\\/\\/example.com\\/"}],"referenced_workflows":[{"path":"generated_path_null","ref":"generated_ref_null","sha":"generated_sha_null"}],"repository":{"archive_url":"generated_archive_url_uri-template","assignees_url":"generated_assignees_url_uri-template","blobs_url":"generated_blobs_url_uri-template","branches_url":"generated_branches_url_uri-template","collaborators_url":"generated_collaborators_url_uri-template","comments_url":"generated_comments_url_uri-template","commits_url":"generated_commits_url_uri-template","compare_url":"generated_compare_url_uri-template","contents_url":"generated_contents_url_uri-template","contributors_url":"https:\\/\\/example.com\\/","deployments_url":"https:\\/\\/example.com\\/","description":"generated_description_null","downloads_url":"https:\\/\\/example.com\\/","events_url":"https:\\/\\/example.com\\/","fork":false,"forks_url":"https:\\/\\/example.com\\/","full_name":"generated_full_name_null","git_commits_url":"generated_git_commits_url_uri-template","git_refs_url":"generated_git_refs_url_uri-template","git_tags_url":"generated_git_tags_url_uri-template","hooks_url":"https:\\/\\/example.com\\/","html_url":"https:\\/\\/example.com\\/","id":13,"issue_comment_url":"generated_issue_comment_url_uri-template","issue_events_url":"generated_issue_events_url_uri-template","issues_url":"generated_issues_url_uri-template","keys_url":"generated_keys_url_uri-template","labels_url":"generated_labels_url_uri-template","languages_url":"https:\\/\\/example.com\\/","merges_url":"https:\\/\\/example.com\\/","milestones_url":"generated_milestones_url_uri-template","name":"generated_name_null","node_id":"generated_node_id_null","notifications_url":"generated_notifications_url_uri-template","owner":{"avatar_url":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","events_url":"generated_events_url_uri-template","followers_url":"https:\\/\\/example.com\\/","following_url":"generated_following_url_uri-template","gists_url":"generated_gists_url_uri-template","gravatar_id":"generated_gravatar_id_null","html_url":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","node_id":"generated_node_id_null","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated_starred_url_uri-template","subscriptions_url":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"},"private":false,"pulls_url":"generated_pulls_url_uri-template","releases_url":"generated_releases_url_uri-template","stargazers_url":"https:\\/\\/example.com\\/","statuses_url":"generated_statuses_url_uri-template","subscribers_url":"https:\\/\\/example.com\\/","subscription_url":"https:\\/\\/example.com\\/","tags_url":"https:\\/\\/example.com\\/","teams_url":"https:\\/\\/example.com\\/","trees_url":"generated_trees_url_uri-template","url":"https:\\/\\/example.com\\/"},"rerun_url":"https:\\/\\/example.com\\/","run_attempt":13,"run_number":13,"run_started_at":"1970-01-01T00:00:00+00:00","status":"requested","triggering_actor":{"avatar_url":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","events_url":"generated_events_url_uri-template","followers_url":"https:\\/\\/example.com\\/","following_url":"generated_following_url_uri-template","gists_url":"generated_gists_url_uri-template","gravatar_id":"generated_gravatar_id_null","html_url":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","node_id":"generated_node_id_null","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated_starred_url_uri-template","subscriptions_url":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"},"updated_at":"1970-01-01T00:00:00+00:00","url":"https:\\/\\/example.com\\/","workflow_id":13,"workflow_url":"https:\\/\\/example.com\\/","display_title":"generated_display_title_null"}';

    /**
     * @param array<PullRequests>         $pullRequests
     * @param ?array<ReferencedWorkflows> $referencedWorkflows
     */
    public function __construct(public ?Schema\WebhookWorkflowRunRequested\WorkflowRun\Actor $actor, #[MapFrom('artifacts_url')] public string $artifactsUrl, #[MapFrom('cancel_url')] public string $cancelUrl, #[MapFrom('check_suite_id')] public int $checkSuiteId, #[MapFrom('check_suite_node_id')] public string $checkSuiteNodeId, #[MapFrom('check_suite_url')] public string $checkSuiteUrl, public ?string $conclusion, #[MapFrom('created_at')] public string $createdAt, public string $event, #[MapFrom('head_branch')] public ?string $headBranch, #[MapFrom('head_commit')] public Schema\WebhookWorkflowRunRequested\WorkflowRun\HeadCommit $headCommit, #[MapFrom('head_repository')] public Schema\WebhookWorkflowRunRequested\WorkflowRun\HeadRepository $headRepository, #[MapFrom('head_sha')] public string $headSha, #[MapFrom('html_url')] public string $htmlUrl, public int $id, #[MapFrom('jobs_url')] public string $jobsUrl, #[MapFrom('logs_url')] public string $logsUrl, public ?string $name, #[MapFrom('node_id')] public string $nodeId, public string $path, #[MapFrom('previous_attempt_url')] public ?string $previousAttemptUrl, #[MapFrom('pull_requests')] #[CastListToType(Schema\WebhookWorkflowRunRequested\WorkflowRun\PullRequests::class)] public array $pullRequests, #[MapFrom('referenced_workflows')] #[CastListToType(Schema\WebhookWorkflowRunRequested\WorkflowRun\ReferencedWorkflows::class)] public ?array $referencedWorkflows, public Schema\WebhookWorkflowRunRequested\WorkflowRun\Repository $repository, #[MapFrom('rerun_url')] public string $rerunUrl, #[MapFrom('run_attempt')] public int $runAttempt, #[MapFrom('run_number')] public int $runNumber, #[MapFrom('run_started_at')] public string $runStartedAt, public string $status, #[MapFrom('triggering_actor')] public ?Schema\WebhookWorkflowRunRequested\WorkflowRun\TriggeringActor $triggeringActor, #[MapFrom('updated_at')] public string $updatedAt, public string $url, #[MapFrom('workflow_id')] public int $workflowId, #[MapFrom('workflow_url')] public string $workflowUrl, #[MapFrom('display_title')] public string $displayTitle)
    {
    }
}
