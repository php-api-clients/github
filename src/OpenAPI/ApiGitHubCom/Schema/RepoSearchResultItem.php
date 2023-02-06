<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class RepoSearchResultItem
{
    public const SCHEMA_JSON = '{"title":"Repo Search Result Item","required":["archive_url","assignees_url","blobs_url","branches_url","collaborators_url","comments_url","commits_url","compare_url","contents_url","contributors_url","deployments_url","description","downloads_url","events_url","fork","forks_url","full_name","git_commits_url","git_refs_url","git_tags_url","hooks_url","html_url","id","node_id","issue_comment_url","issue_events_url","issues_url","keys_url","labels_url","languages_url","merges_url","milestones_url","name","notifications_url","owner","private","pulls_url","releases_url","stargazers_url","statuses_url","subscribers_url","subscription_url","tags_url","teams_url","trees_url","url","clone_url","default_branch","forks","forks_count","git_url","has_downloads","has_issues","has_projects","has_wiki","has_pages","homepage","language","archived","disabled","mirror_url","open_issues","open_issues_count","license","pushed_at","size","ssh_url","stargazers_count","svn_url","watchers","watchers_count","created_at","updated_at","score"],"type":"object","properties":{"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"full_name":{"type":"string"},"owner":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"private":{"type":"boolean"},"html_url":{"type":"string","format":"uri"},"description":{"type":["string","null"]},"fork":{"type":"boolean"},"url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"pushed_at":{"type":"string","format":"date-time"},"homepage":{"type":["string","null"],"format":"uri"},"size":{"type":"integer"},"stargazers_count":{"type":"integer"},"watchers_count":{"type":"integer"},"language":{"type":["string","null"]},"forks_count":{"type":"integer"},"open_issues_count":{"type":"integer"},"master_branch":{"type":"string"},"default_branch":{"type":"string"},"score":{"type":"number"},"forks_url":{"type":"string","format":"uri"},"keys_url":{"type":"string"},"collaborators_url":{"type":"string"},"teams_url":{"type":"string","format":"uri"},"hooks_url":{"type":"string","format":"uri"},"issue_events_url":{"type":"string"},"events_url":{"type":"string","format":"uri"},"assignees_url":{"type":"string"},"branches_url":{"type":"string"},"tags_url":{"type":"string","format":"uri"},"blobs_url":{"type":"string"},"git_tags_url":{"type":"string"},"git_refs_url":{"type":"string"},"trees_url":{"type":"string"},"statuses_url":{"type":"string"},"languages_url":{"type":"string","format":"uri"},"stargazers_url":{"type":"string","format":"uri"},"contributors_url":{"type":"string","format":"uri"},"subscribers_url":{"type":"string","format":"uri"},"subscription_url":{"type":"string","format":"uri"},"commits_url":{"type":"string"},"git_commits_url":{"type":"string"},"comments_url":{"type":"string"},"issue_comment_url":{"type":"string"},"contents_url":{"type":"string"},"compare_url":{"type":"string"},"merges_url":{"type":"string","format":"uri"},"archive_url":{"type":"string"},"downloads_url":{"type":"string","format":"uri"},"issues_url":{"type":"string"},"pulls_url":{"type":"string"},"milestones_url":{"type":"string"},"notifications_url":{"type":"string"},"labels_url":{"type":"string"},"releases_url":{"type":"string"},"deployments_url":{"type":"string","format":"uri"},"git_url":{"type":"string"},"ssh_url":{"type":"string"},"clone_url":{"type":"string"},"svn_url":{"type":"string","format":"uri"},"forks":{"type":"integer"},"open_issues":{"type":"integer"},"watchers":{"type":"integer"},"topics":{"type":"array","items":{"type":"string"}},"mirror_url":{"type":["string","null"],"format":"uri"},"has_issues":{"type":"boolean"},"has_projects":{"type":"boolean"},"has_pages":{"type":"boolean"},"has_wiki":{"type":"boolean"},"has_downloads":{"type":"boolean"},"has_discussions":{"type":"boolean"},"archived":{"type":"boolean"},"disabled":{"type":"boolean","description":"Returns whether or not this repository disabled."},"visibility":{"type":"string","description":"The repository visibility: public, private, or internal."},"license":{"anyOf":[{"type":"null"},{"title":"License Simple","required":["key","name","url","spdx_id","node_id"],"type":"object","properties":{"key":{"type":"string","examples":["mit"]},"name":{"type":"string","examples":["MIT License"]},"url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/api.github.com\\/licenses\\/mit"]},"spdx_id":{"type":["string","null"],"examples":["MIT"]},"node_id":{"type":"string","examples":["MDc6TGljZW5zZW1pdA=="]},"html_url":{"type":"string","format":"uri"}},"description":"License Simple"}]},"permissions":{"required":["admin","pull","push"],"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"},"pull":{"type":"boolean"}}},"text_matches":{"title":"Search Result Text Matches","type":"array","items":{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}},"temp_clone_token":{"type":"string"},"allow_merge_commit":{"type":"boolean"},"allow_squash_merge":{"type":"boolean"},"allow_rebase_merge":{"type":"boolean"},"allow_auto_merge":{"type":"boolean"},"delete_branch_on_merge":{"type":"boolean"},"allow_forking":{"type":"boolean"},"is_template":{"type":"boolean"},"web_commit_signoff_required":{"type":"boolean","examples":[false]}},"description":"Repo Search Result Item"}';
    public const SCHEMA_EXAMPLE = '{"web_commit_signoff_required":false}';
    public const SCHEMA_TITLE = 'Repo Search Result Item';
    public const SCHEMA_DESCRIPTION = 'Repo Search Result Item';
    public readonly int $id;
    public readonly string $node_id;
    public readonly string $name;
    public readonly string $full_name;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepoSearchResultItem\Owner $owner;
    public readonly bool $private;
    public readonly string $html_url;
    public readonly ?string $description;
    public readonly bool $fork;
    public readonly string $url;
    public readonly string $created_at;
    public readonly string $updated_at;
    public readonly string $pushed_at;
    public readonly ?string $homepage;
    public readonly int $size;
    public readonly int $stargazers_count;
    public readonly int $watchers_count;
    public readonly ?string $language;
    public readonly int $forks_count;
    public readonly int $open_issues_count;
    public readonly ?string $master_branch;
    public readonly string $default_branch;
    public readonly int $score;
    public readonly string $forks_url;
    public readonly string $keys_url;
    public readonly string $collaborators_url;
    public readonly string $teams_url;
    public readonly string $hooks_url;
    public readonly string $issue_events_url;
    public readonly string $events_url;
    public readonly string $assignees_url;
    public readonly string $branches_url;
    public readonly string $tags_url;
    public readonly string $blobs_url;
    public readonly string $git_tags_url;
    public readonly string $git_refs_url;
    public readonly string $trees_url;
    public readonly string $statuses_url;
    public readonly string $languages_url;
    public readonly string $stargazers_url;
    public readonly string $contributors_url;
    public readonly string $subscribers_url;
    public readonly string $subscription_url;
    public readonly string $commits_url;
    public readonly string $git_commits_url;
    public readonly string $comments_url;
    public readonly string $issue_comment_url;
    public readonly string $contents_url;
    public readonly string $compare_url;
    public readonly string $merges_url;
    public readonly string $archive_url;
    public readonly string $downloads_url;
    public readonly string $issues_url;
    public readonly string $pulls_url;
    public readonly string $milestones_url;
    public readonly string $notifications_url;
    public readonly string $labels_url;
    public readonly string $releases_url;
    public readonly string $deployments_url;
    public readonly string $git_url;
    public readonly string $ssh_url;
    public readonly string $clone_url;
    public readonly string $svn_url;
    public readonly int $forks;
    public readonly int $open_issues;
    public readonly int $watchers;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepoSearchResultItem\Topics>
     */
    public readonly array $topics;
    public readonly ?string $mirror_url;
    public readonly bool $has_issues;
    public readonly bool $has_projects;
    public readonly bool $has_pages;
    public readonly bool $has_wiki;
    public readonly bool $has_downloads;
    public readonly ?bool $has_discussions;
    public readonly bool $archived;
    /**
     * Returns whether or not this repository disabled.
     */
    public readonly bool $disabled;
    /**
     * The repository visibility: public, private, or internal.
     */
    public readonly ?string $visibility;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepoSearchResultItem\License $license;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepoSearchResultItem\Permissions $permissions;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SearchResultTextMatches>
     */
    public readonly array $text_matches;
    public readonly ?string $temp_clone_token;
    public readonly ?bool $allow_merge_commit;
    public readonly ?bool $allow_squash_merge;
    public readonly ?bool $allow_rebase_merge;
    public readonly ?bool $allow_auto_merge;
    public readonly ?bool $delete_branch_on_merge;
    public readonly ?bool $allow_forking;
    public readonly ?bool $is_template;
    public readonly ?bool $web_commit_signoff_required;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepoSearchResultItem\Topics> $topics
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SearchResultTextMatches> $text_matches
     */
    public function __construct(int $id, string $node_id, string $name, string $full_name, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepoSearchResultItem\Owner $owner, bool $private, string $html_url, string $description, bool $fork, string $url, string $created_at, string $updated_at, string $pushed_at, string $homepage, int $size, int $stargazers_count, int $watchers_count, string $language, int $forks_count, int $open_issues_count, string $master_branch, string $default_branch, int $score, string $forks_url, string $keys_url, string $collaborators_url, string $teams_url, string $hooks_url, string $issue_events_url, string $events_url, string $assignees_url, string $branches_url, string $tags_url, string $blobs_url, string $git_tags_url, string $git_refs_url, string $trees_url, string $statuses_url, string $languages_url, string $stargazers_url, string $contributors_url, string $subscribers_url, string $subscription_url, string $commits_url, string $git_commits_url, string $comments_url, string $issue_comment_url, string $contents_url, string $compare_url, string $merges_url, string $archive_url, string $downloads_url, string $issues_url, string $pulls_url, string $milestones_url, string $notifications_url, string $labels_url, string $releases_url, string $deployments_url, string $git_url, string $ssh_url, string $clone_url, string $svn_url, int $forks, int $open_issues, int $watchers, array $topics, string $mirror_url, bool $has_issues, bool $has_projects, bool $has_pages, bool $has_wiki, bool $has_downloads, bool $has_discussions, bool $archived, bool $disabled, string $visibility, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepoSearchResultItem\License $license, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepoSearchResultItem\Permissions $permissions, array $text_matches, string $temp_clone_token, bool $allow_merge_commit, bool $allow_squash_merge, bool $allow_rebase_merge, bool $allow_auto_merge, bool $delete_branch_on_merge, bool $allow_forking, bool $is_template, bool $web_commit_signoff_required)
    {
        $this->id = $id;
        $this->node_id = $node_id;
        $this->name = $name;
        $this->full_name = $full_name;
        $this->owner = $owner;
        $this->private = $private;
        $this->html_url = $html_url;
        $this->description = $description;
        $this->fork = $fork;
        $this->url = $url;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->pushed_at = $pushed_at;
        $this->homepage = $homepage;
        $this->size = $size;
        $this->stargazers_count = $stargazers_count;
        $this->watchers_count = $watchers_count;
        $this->language = $language;
        $this->forks_count = $forks_count;
        $this->open_issues_count = $open_issues_count;
        $this->master_branch = $master_branch;
        $this->default_branch = $default_branch;
        $this->score = $score;
        $this->forks_url = $forks_url;
        $this->keys_url = $keys_url;
        $this->collaborators_url = $collaborators_url;
        $this->teams_url = $teams_url;
        $this->hooks_url = $hooks_url;
        $this->issue_events_url = $issue_events_url;
        $this->events_url = $events_url;
        $this->assignees_url = $assignees_url;
        $this->branches_url = $branches_url;
        $this->tags_url = $tags_url;
        $this->blobs_url = $blobs_url;
        $this->git_tags_url = $git_tags_url;
        $this->git_refs_url = $git_refs_url;
        $this->trees_url = $trees_url;
        $this->statuses_url = $statuses_url;
        $this->languages_url = $languages_url;
        $this->stargazers_url = $stargazers_url;
        $this->contributors_url = $contributors_url;
        $this->subscribers_url = $subscribers_url;
        $this->subscription_url = $subscription_url;
        $this->commits_url = $commits_url;
        $this->git_commits_url = $git_commits_url;
        $this->comments_url = $comments_url;
        $this->issue_comment_url = $issue_comment_url;
        $this->contents_url = $contents_url;
        $this->compare_url = $compare_url;
        $this->merges_url = $merges_url;
        $this->archive_url = $archive_url;
        $this->downloads_url = $downloads_url;
        $this->issues_url = $issues_url;
        $this->pulls_url = $pulls_url;
        $this->milestones_url = $milestones_url;
        $this->notifications_url = $notifications_url;
        $this->labels_url = $labels_url;
        $this->releases_url = $releases_url;
        $this->deployments_url = $deployments_url;
        $this->git_url = $git_url;
        $this->ssh_url = $ssh_url;
        $this->clone_url = $clone_url;
        $this->svn_url = $svn_url;
        $this->forks = $forks;
        $this->open_issues = $open_issues;
        $this->watchers = $watchers;
        $this->topics = $topics;
        $this->mirror_url = $mirror_url;
        $this->has_issues = $has_issues;
        $this->has_projects = $has_projects;
        $this->has_pages = $has_pages;
        $this->has_wiki = $has_wiki;
        $this->has_downloads = $has_downloads;
        $this->has_discussions = $has_discussions;
        $this->archived = $archived;
        $this->disabled = $disabled;
        $this->visibility = $visibility;
        $this->license = $license;
        $this->permissions = $permissions;
        $this->text_matches = $text_matches;
        $this->temp_clone_token = $temp_clone_token;
        $this->allow_merge_commit = $allow_merge_commit;
        $this->allow_squash_merge = $allow_squash_merge;
        $this->allow_rebase_merge = $allow_rebase_merge;
        $this->allow_auto_merge = $allow_auto_merge;
        $this->delete_branch_on_merge = $delete_branch_on_merge;
        $this->allow_forking = $allow_forking;
        $this->is_template = $is_template;
        $this->web_commit_signoff_required = $web_commit_signoff_required;
    }
}
