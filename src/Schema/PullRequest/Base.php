<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\PullRequest;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Base
{
    public const SCHEMA_JSON = '{"required":["label","ref","repo","sha","user"],"type":"object","properties":{"label":{"type":"string"},"ref":{"type":"string"},"repo":{"required":["archive_url","assignees_url","blobs_url","branches_url","collaborators_url","comments_url","commits_url","compare_url","contents_url","contributors_url","deployments_url","description","downloads_url","events_url","fork","forks_url","full_name","git_commits_url","git_refs_url","git_tags_url","hooks_url","html_url","id","node_id","issue_comment_url","issue_events_url","issues_url","keys_url","labels_url","languages_url","merges_url","milestones_url","name","notifications_url","owner","private","pulls_url","releases_url","stargazers_url","statuses_url","subscribers_url","subscription_url","tags_url","teams_url","trees_url","url","clone_url","default_branch","forks","forks_count","git_url","has_downloads","has_issues","has_projects","has_wiki","has_pages","has_discussions","homepage","language","archived","disabled","mirror_url","open_issues","open_issues_count","license","pushed_at","size","ssh_url","stargazers_count","svn_url","watchers","watchers_count","created_at","updated_at"],"type":"object","properties":{"archive_url":{"type":"string"},"assignees_url":{"type":"string"},"blobs_url":{"type":"string"},"branches_url":{"type":"string"},"collaborators_url":{"type":"string"},"comments_url":{"type":"string"},"commits_url":{"type":"string"},"compare_url":{"type":"string"},"contents_url":{"type":"string"},"contributors_url":{"type":"string","format":"uri"},"deployments_url":{"type":"string","format":"uri"},"description":{"type":["string","null"]},"downloads_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri"},"fork":{"type":"boolean"},"forks_url":{"type":"string","format":"uri"},"full_name":{"type":"string"},"git_commits_url":{"type":"string"},"git_refs_url":{"type":"string"},"git_tags_url":{"type":"string"},"hooks_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"is_template":{"type":"boolean"},"node_id":{"type":"string"},"issue_comment_url":{"type":"string"},"issue_events_url":{"type":"string"},"issues_url":{"type":"string"},"keys_url":{"type":"string"},"labels_url":{"type":"string"},"languages_url":{"type":"string","format":"uri"},"merges_url":{"type":"string","format":"uri"},"milestones_url":{"type":"string"},"name":{"type":"string"},"notifications_url":{"type":"string"},"owner":{"required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"avatar_url":{"type":"string","format":"uri"},"events_url":{"type":"string"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":["string","null"]},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"node_id":{"type":"string"},"login":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"type":"string"},"url":{"type":"string","format":"uri"}}},"private":{"type":"boolean"},"pulls_url":{"type":"string"},"releases_url":{"type":"string"},"stargazers_url":{"type":"string","format":"uri"},"statuses_url":{"type":"string"},"subscribers_url":{"type":"string","format":"uri"},"subscription_url":{"type":"string","format":"uri"},"tags_url":{"type":"string","format":"uri"},"teams_url":{"type":"string","format":"uri"},"trees_url":{"type":"string"},"url":{"type":"string","format":"uri"},"clone_url":{"type":"string"},"default_branch":{"type":"string"},"forks":{"type":"integer"},"forks_count":{"type":"integer"},"git_url":{"type":"string"},"has_downloads":{"type":"boolean"},"has_issues":{"type":"boolean"},"has_projects":{"type":"boolean"},"has_wiki":{"type":"boolean"},"has_pages":{"type":"boolean"},"has_discussions":{"type":"boolean"},"homepage":{"type":["string","null"],"format":"uri"},"language":{"type":["string","null"]},"master_branch":{"type":"string"},"archived":{"type":"boolean"},"disabled":{"type":"boolean"},"visibility":{"type":"string","description":"The repository visibility: public, private, or internal."},"mirror_url":{"type":["string","null"],"format":"uri"},"open_issues":{"type":"integer"},"open_issues_count":{"type":"integer"},"permissions":{"required":["admin","pull","push"],"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"},"pull":{"type":"boolean"}}},"temp_clone_token":{"type":"string"},"allow_merge_commit":{"type":"boolean"},"allow_squash_merge":{"type":"boolean"},"allow_rebase_merge":{"type":"boolean"},"license":{"anyOf":[{"type":"null"},{"title":"License Simple","required":["key","name","url","spdx_id","node_id"],"type":"object","properties":{"key":{"type":"string","examples":["mit"]},"name":{"type":"string","examples":["MIT License"]},"url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/api.github.com\\/licenses\\/mit"]},"spdx_id":{"type":["string","null"],"examples":["MIT"]},"node_id":{"type":"string","examples":["MDc6TGljZW5zZW1pdA=="]},"html_url":{"type":"string","format":"uri"}},"description":"License Simple"}]},"pushed_at":{"type":"string","format":"date-time"},"size":{"type":"integer"},"ssh_url":{"type":"string"},"stargazers_count":{"type":"integer"},"svn_url":{"type":"string","format":"uri"},"topics":{"type":"array","items":{"type":"string"}},"watchers":{"type":"integer"},"watchers_count":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"allow_forking":{"type":"boolean"},"web_commit_signoff_required":{"type":"boolean"}}},"sha":{"type":"string"},"user":{"required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"avatar_url":{"type":"string","format":"uri"},"events_url":{"type":"string"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":["string","null"]},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"node_id":{"type":"string"},"login":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"type":"string"},"url":{"type":"string","format":"uri"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"label":"generated_label_null","ref":"generated_ref_null","repo":{"archive_url":"generated_archive_url_null","assignees_url":"generated_assignees_url_null","blobs_url":"generated_blobs_url_null","branches_url":"generated_branches_url_null","collaborators_url":"generated_collaborators_url_null","comments_url":"generated_comments_url_null","commits_url":"generated_commits_url_null","compare_url":"generated_compare_url_null","contents_url":"generated_contents_url_null","contributors_url":"https:\\/\\/example.com\\/","deployments_url":"https:\\/\\/example.com\\/","description":"generated_description_null","downloads_url":"https:\\/\\/example.com\\/","events_url":"https:\\/\\/example.com\\/","fork":false,"forks_url":"https:\\/\\/example.com\\/","full_name":"generated_full_name_null","git_commits_url":"generated_git_commits_url_null","git_refs_url":"generated_git_refs_url_null","git_tags_url":"generated_git_tags_url_null","hooks_url":"https:\\/\\/example.com\\/","html_url":"https:\\/\\/example.com\\/","id":13,"is_template":false,"node_id":"generated_node_id_null","issue_comment_url":"generated_issue_comment_url_null","issue_events_url":"generated_issue_events_url_null","issues_url":"generated_issues_url_null","keys_url":"generated_keys_url_null","labels_url":"generated_labels_url_null","languages_url":"https:\\/\\/example.com\\/","merges_url":"https:\\/\\/example.com\\/","milestones_url":"generated_milestones_url_null","name":"generated_name_null","notifications_url":"generated_notifications_url_null","owner":{"avatar_url":"https:\\/\\/example.com\\/","events_url":"generated_events_url_null","followers_url":"https:\\/\\/example.com\\/","following_url":"generated_following_url_null","gists_url":"generated_gists_url_null","gravatar_id":"generated_gravatar_id_null","html_url":"https:\\/\\/example.com\\/","id":13,"node_id":"generated_node_id_null","login":"generated_login_null","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated_starred_url_null","subscriptions_url":"https:\\/\\/example.com\\/","type":"generated_type_null","url":"https:\\/\\/example.com\\/"},"private":false,"pulls_url":"generated_pulls_url_null","releases_url":"generated_releases_url_null","stargazers_url":"https:\\/\\/example.com\\/","statuses_url":"generated_statuses_url_null","subscribers_url":"https:\\/\\/example.com\\/","subscription_url":"https:\\/\\/example.com\\/","tags_url":"https:\\/\\/example.com\\/","teams_url":"https:\\/\\/example.com\\/","trees_url":"generated_trees_url_null","url":"https:\\/\\/example.com\\/","clone_url":"generated_clone_url_null","default_branch":"generated_default_branch_null","forks":13,"forks_count":13,"git_url":"generated_git_url_null","has_downloads":false,"has_issues":false,"has_projects":false,"has_wiki":false,"has_pages":false,"has_discussions":false,"homepage":"https:\\/\\/example.com\\/","language":"generated_language_null","master_branch":"generated_master_branch_null","archived":false,"disabled":false,"visibility":"generated_visibility_null","mirror_url":"https:\\/\\/example.com\\/","open_issues":13,"open_issues_count":13,"permissions":{"admin":false,"maintain":false,"push":false,"triage":false,"pull":false},"temp_clone_token":"generated_temp_clone_token_null","allow_merge_commit":false,"allow_squash_merge":false,"allow_rebase_merge":false,"license":null,"pushed_at":"1970-01-01T00:00:00+00:00","size":13,"ssh_url":"generated_ssh_url_null","stargazers_count":13,"svn_url":"https:\\/\\/example.com\\/","topics":["generated_topics_null"],"watchers":13,"watchers_count":13,"created_at":"1970-01-01T00:00:00+00:00","updated_at":"1970-01-01T00:00:00+00:00","allow_forking":false,"web_commit_signoff_required":false},"sha":"generated_sha_null","user":{"avatar_url":"https:\\/\\/example.com\\/","events_url":"generated_events_url_null","followers_url":"https:\\/\\/example.com\\/","following_url":"generated_following_url_null","gists_url":"generated_gists_url_null","gravatar_id":"generated_gravatar_id_null","html_url":"https:\\/\\/example.com\\/","id":13,"node_id":"generated_node_id_null","login":"generated_login_null","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated_starred_url_null","subscriptions_url":"https:\\/\\/example.com\\/","type":"generated_type_null","url":"https:\\/\\/example.com\\/"}}';
    public function __construct(public string $label, public string $ref, public Schema\PullRequest\Base\Repo $repo, public string $sha, public Schema\PullRequest\Base\User $user)
    {
    }
}