<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Abstractb93bca5ee4da40e46dc94a0b72fa76aa
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"archive_url":{"type":"string"},"assignees_url":{"type":"string"},"blobs_url":{"type":"string"},"branches_url":{"type":"string"},"collaborators_url":{"type":"string"},"comments_url":{"type":"string"},"commits_url":{"type":"string"},"compare_url":{"type":"string"},"contents_url":{"type":"string"},"contributors_url":{"type":"string"},"deployments_url":{"type":"string"},"description":{"type":["null"]},"downloads_url":{"type":"string"},"events_url":{"type":"string"},"fork":{"type":"boolean"},"forks_url":{"type":"string"},"full_name":{"type":"string"},"git_commits_url":{"type":"string"},"git_refs_url":{"type":"string"},"git_tags_url":{"type":"string"},"hooks_url":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"issue_comment_url":{"type":"string"},"issue_events_url":{"type":"string"},"issues_url":{"type":"string"},"keys_url":{"type":"string"},"labels_url":{"type":"string"},"languages_url":{"type":"string"},"merges_url":{"type":"string"},"milestones_url":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"notifications_url":{"type":"string"},"owner":{"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"private":{"type":"boolean"},"pulls_url":{"type":"string"},"releases_url":{"type":"string"},"stargazers_url":{"type":"string"},"statuses_url":{"type":"string"},"subscribers_url":{"type":"string"},"subscription_url":{"type":"string"},"tags_url":{"type":"string"},"teams_url":{"type":"string"},"trees_url":{"type":"string"},"url":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"archive_url":"generated_archive_url_null","assignees_url":"generated_assignees_url_null","blobs_url":"generated_blobs_url_null","branches_url":"generated_branches_url_null","collaborators_url":"generated_collaborators_url_null","comments_url":"generated_comments_url_null","commits_url":"generated_commits_url_null","compare_url":"generated_compare_url_null","contents_url":"generated_contents_url_null","contributors_url":"generated_contributors_url_null","deployments_url":"generated_deployments_url_null","description":null,"downloads_url":"generated_downloads_url_null","events_url":"generated_events_url_null","fork":false,"forks_url":"generated_forks_url_null","full_name":"generated_full_name_null","git_commits_url":"generated_git_commits_url_null","git_refs_url":"generated_git_refs_url_null","git_tags_url":"generated_git_tags_url_null","hooks_url":"generated_hooks_url_null","html_url":"generated_html_url_null","id":13,"issue_comment_url":"generated_issue_comment_url_null","issue_events_url":"generated_issue_events_url_null","issues_url":"generated_issues_url_null","keys_url":"generated_keys_url_null","labels_url":"generated_labels_url_null","languages_url":"generated_languages_url_null","merges_url":"generated_merges_url_null","milestones_url":"generated_milestones_url_null","name":"generated_name_null","node_id":"generated_node_id_null","notifications_url":"generated_notifications_url_null","owner":{"avatar_url":"generated_avatar_url_null","events_url":"generated_events_url_null","followers_url":"generated_followers_url_null","following_url":"generated_following_url_null","gists_url":"generated_gists_url_null","gravatar_id":"generated_gravatar_id_null","html_url":"generated_html_url_null","id":13,"login":"generated_login_null","node_id":"generated_node_id_null","organizations_url":"generated_organizations_url_null","received_events_url":"generated_received_events_url_null","repos_url":"generated_repos_url_null","site_admin":false,"starred_url":"generated_starred_url_null","subscriptions_url":"generated_subscriptions_url_null","type":"generated_type_null","url":"generated_url_null"},"private":false,"pulls_url":"generated_pulls_url_null","releases_url":"generated_releases_url_null","stargazers_url":"generated_stargazers_url_null","statuses_url":"generated_statuses_url_null","subscribers_url":"generated_subscribers_url_null","subscription_url":"generated_subscription_url_null","tags_url":"generated_tags_url_null","teams_url":"generated_teams_url_null","trees_url":"generated_trees_url_null","url":"generated_url_null"}';

    public function __construct(#[MapFrom('archive_url')] public ?string $archiveUrl, #[MapFrom('assignees_url')] public ?string $assigneesUrl, #[MapFrom('blobs_url')] public ?string $blobsUrl, #[MapFrom('branches_url')] public ?string $branchesUrl, #[MapFrom('collaborators_url')] public ?string $collaboratorsUrl, #[MapFrom('comments_url')] public ?string $commentsUrl, #[MapFrom('commits_url')] public ?string $commitsUrl, #[MapFrom('compare_url')] public ?string $compareUrl, #[MapFrom('contents_url')] public ?string $contentsUrl, #[MapFrom('contributors_url')] public ?string $contributorsUrl, #[MapFrom('deployments_url')] public ?string $deploymentsUrl, public mixed $description, #[MapFrom('downloads_url')] public ?string $downloadsUrl, #[MapFrom('events_url')] public ?string $eventsUrl, public ?bool $fork, #[MapFrom('forks_url')] public ?string $forksUrl, #[MapFrom('full_name')] public ?string $fullName, #[MapFrom('git_commits_url')] public ?string $gitCommitsUrl, #[MapFrom('git_refs_url')] public ?string $gitRefsUrl, #[MapFrom('git_tags_url')] public ?string $gitTagsUrl, #[MapFrom('hooks_url')] public ?string $hooksUrl, #[MapFrom('html_url')] public ?string $htmlUrl, public ?int $id, #[MapFrom('issue_comment_url')] public ?string $issueCommentUrl, #[MapFrom('issue_events_url')] public ?string $issueEventsUrl, #[MapFrom('issues_url')] public ?string $issuesUrl, #[MapFrom('keys_url')] public ?string $keysUrl, #[MapFrom('labels_url')] public ?string $labelsUrl, #[MapFrom('languages_url')] public ?string $languagesUrl, #[MapFrom('merges_url')] public ?string $mergesUrl, #[MapFrom('milestones_url')] public ?string $milestonesUrl, public ?string $name, #[MapFrom('node_id')] public ?string $nodeId, #[MapFrom('notifications_url')] public ?string $notificationsUrl, public ?Schema\WebhookDeploymentCreated\WorkflowRun\HeadRepository\Owner $owner, public ?bool $private, #[MapFrom('pulls_url')] public ?string $pullsUrl, #[MapFrom('releases_url')] public ?string $releasesUrl, #[MapFrom('stargazers_url')] public ?string $stargazersUrl, #[MapFrom('statuses_url')] public ?string $statusesUrl, #[MapFrom('subscribers_url')] public ?string $subscribersUrl, #[MapFrom('subscription_url')] public ?string $subscriptionUrl, #[MapFrom('tags_url')] public ?string $tagsUrl, #[MapFrom('teams_url')] public ?string $teamsUrl, #[MapFrom('trees_url')] public ?string $treesUrl, public ?string $url)
    {
    }
}
