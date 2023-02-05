<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class NewRepository
{
    public const SCHEMA_JSON = '{"title":"Repository","required":["id","node_id","name","full_name","private","owner","html_url","description","fork","url","forks_url","keys_url","collaborators_url","teams_url","hooks_url","issue_events_url","events_url","assignees_url","branches_url","tags_url","blobs_url","git_tags_url","git_refs_url","trees_url","statuses_url","languages_url","stargazers_url","contributors_url","subscribers_url","subscription_url","commits_url","git_commits_url","comments_url","issue_comment_url","contents_url","compare_url","merges_url","archive_url","downloads_url","issues_url","pulls_url","milestones_url","notifications_url","labels_url","releases_url","deployments_url","created_at","updated_at","pushed_at","git_url","ssh_url","clone_url","svn_url","homepage","size","stargazers_count","watchers_count","language","has_issues","has_projects","has_downloads","has_wiki","has_pages","has_discussions","forks_count","mirror_url","archived","open_issues_count","license","forks","open_issues","watchers","default_branch","topics","visibility"],"type":"object","properties":{"allow_auto_merge":{"type":"boolean","description":"Whether to allow auto-merge for pull requests.","default":false},"allow_forking":{"type":"boolean","description":"Whether to allow private forks"},"allow_merge_commit":{"type":"boolean","description":"Whether to allow merge commits for pull requests.","default":true},"allow_rebase_merge":{"type":"boolean","description":"Whether to allow rebase merges for pull requests.","default":true},"allow_squash_merge":{"type":"boolean","description":"Whether to allow squash merges for pull requests.","default":true},"allow_update_branch":{"type":"boolean"},"archive_url":{"type":"string","format":"uri-template"},"archived":{"type":"boolean","description":"Whether the repository is archived.","default":false},"assignees_url":{"type":"string","format":"uri-template"},"blobs_url":{"type":"string","format":"uri-template"},"branches_url":{"type":"string","format":"uri-template"},"clone_url":{"type":"string","format":"uri"},"collaborators_url":{"type":"string","format":"uri-template"},"comments_url":{"type":"string","format":"uri-template"},"commits_url":{"type":"string","format":"uri-template"},"compare_url":{"type":"string","format":"uri-template"},"contents_url":{"type":"string","format":"uri-template"},"contributors_url":{"type":"string","format":"uri"},"created_at":{"oneOf":[{"type":"integer"},{"type":"string","format":"date-time"}]},"default_branch":{"type":"string","description":"The default branch of the repository."},"delete_branch_on_merge":{"type":"boolean","description":"Whether to delete head branches when pull requests are merged","default":false},"deployments_url":{"type":"string","format":"uri"},"description":{"type":["string","null"]},"disabled":{"type":"boolean","description":"Returns whether or not this repository is disabled."},"downloads_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri"},"fork":{"type":"boolean"},"forks":{"type":"integer"},"forks_count":{"type":"integer"},"forks_url":{"type":"string","format":"uri"},"full_name":{"type":"string"},"git_commits_url":{"type":"string","format":"uri-template"},"git_refs_url":{"type":"string","format":"uri-template"},"git_tags_url":{"type":"string","format":"uri-template"},"git_url":{"type":"string","format":"uri"},"has_downloads":{"type":"boolean","description":"Whether downloads are enabled.","default":true},"has_issues":{"type":"boolean","description":"Whether issues are enabled.","default":true},"has_pages":{"type":"boolean"},"has_projects":{"type":"boolean","description":"Whether projects are enabled.","default":true},"has_wiki":{"type":"boolean","description":"Whether the wiki is enabled.","default":true},"has_discussions":{"type":"boolean","description":"Whether discussions are enabled.","default":false},"homepage":{"type":["string","null"]},"hooks_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the repository"},"is_template":{"type":"boolean"},"issue_comment_url":{"type":"string","format":"uri-template"},"issue_events_url":{"type":"string","format":"uri-template"},"issues_url":{"type":"string","format":"uri-template"},"keys_url":{"type":"string","format":"uri-template"},"labels_url":{"type":"string","format":"uri-template"},"language":{"type":["string","null"]},"languages_url":{"type":"string","format":"uri"},"license":{"title":"License","required":["key","name","spdx_id","url","node_id"],"type":["object","null"],"properties":{"key":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"spdx_id":{"type":"string"},"url":{"type":["string","null"],"format":"uri"}}},"master_branch":{"type":"string"},"merges_url":{"type":"string","format":"uri"},"milestones_url":{"type":"string","format":"uri-template"},"mirror_url":{"type":["string","null"],"format":"uri"},"name":{"type":"string","description":"The name of the repository."},"node_id":{"type":"string"},"notifications_url":{"type":"string","format":"uri-template"},"open_issues":{"type":"integer"},"open_issues_count":{"type":"integer"},"organization":{"type":"string"},"owner":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"permissions":{"required":["pull","push","admin"],"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"pull":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"}}},"private":{"type":"boolean","description":"Whether the repository is private or public."},"public":{"type":"boolean"},"pulls_url":{"type":"string","format":"uri-template"},"pushed_at":{"type":["null","integer","string"],"oneOf":[{"type":"integer"},{"type":"string","format":"date-time"}]},"releases_url":{"type":"string","format":"uri-template"},"role_name":{"type":["string","null"]},"size":{"type":"integer"},"ssh_url":{"type":"string"},"stargazers":{"type":"integer"},"stargazers_count":{"type":"integer"},"stargazers_url":{"type":"string","format":"uri"},"statuses_url":{"type":"string","format":"uri-template"},"subscribers_url":{"type":"string","format":"uri"},"subscription_url":{"type":"string","format":"uri"},"svn_url":{"type":"string","format":"uri"},"tags_url":{"type":"string","format":"uri"},"teams_url":{"type":"string","format":"uri"},"topics":{"type":"array","items":{"type":"string"}},"trees_url":{"type":"string","format":"uri-template"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"},"visibility":{"enum":["public","private","internal"],"type":"string"},"watchers":{"type":"integer"},"watchers_count":{"type":"integer"},"web_commit_signoff_required":{"type":"boolean","description":"Whether to require contributors to sign off on web-based commits"}},"description":"A git repository"}';
    public const SCHEMA_TITLE = 'Repository';
    public const SCHEMA_DESCRIPTION = 'A git repository';
    /**
     * Whether to allow auto-merge for pull requests.
     */
    public readonly ?bool $allow_auto_merge;
    /**
     * Whether to allow private forks
     */
    public readonly ?bool $allow_forking;
    /**
     * Whether to allow merge commits for pull requests.
     */
    public readonly ?bool $allow_merge_commit;
    /**
     * Whether to allow rebase merges for pull requests.
     */
    public readonly ?bool $allow_rebase_merge;
    /**
     * Whether to allow squash merges for pull requests.
     */
    public readonly ?bool $allow_squash_merge;
    public readonly ?bool $allow_update_branch;
    public readonly string $archive_url;
    /**
     * Whether the repository is archived.
     */
    public readonly bool $archived;
    public readonly string $assignees_url;
    public readonly string $blobs_url;
    public readonly string $branches_url;
    public readonly string $clone_url;
    public readonly string $collaborators_url;
    public readonly string $comments_url;
    public readonly string $commits_url;
    public readonly string $compare_url;
    public readonly string $contents_url;
    public readonly string $contributors_url;
    public readonly mixed $created_at;
    /**
     * The default branch of the repository.
     */
    public readonly string $default_branch;
    /**
     * Whether to delete head branches when pull requests are merged
     */
    public readonly ?bool $delete_branch_on_merge;
    public readonly string $deployments_url;
    public readonly ?string $description;
    /**
     * Returns whether or not this repository is disabled.
     */
    public readonly ?bool $disabled;
    public readonly string $downloads_url;
    public readonly string $events_url;
    public readonly bool $fork;
    public readonly int $forks;
    public readonly int $forks_count;
    public readonly string $forks_url;
    public readonly string $full_name;
    public readonly string $git_commits_url;
    public readonly string $git_refs_url;
    public readonly string $git_tags_url;
    public readonly string $git_url;
    /**
     * Whether downloads are enabled.
     */
    public readonly bool $has_downloads;
    /**
     * Whether issues are enabled.
     */
    public readonly bool $has_issues;
    public readonly bool $has_pages;
    /**
     * Whether projects are enabled.
     */
    public readonly bool $has_projects;
    /**
     * Whether the wiki is enabled.
     */
    public readonly bool $has_wiki;
    /**
     * Whether discussions are enabled.
     */
    public readonly bool $has_discussions;
    public readonly ?string $homepage;
    public readonly string $hooks_url;
    public readonly string $html_url;
    /**
     * Unique identifier of the repository
     */
    public readonly int $id;
    public readonly ?bool $is_template;
    public readonly string $issue_comment_url;
    public readonly string $issue_events_url;
    public readonly string $issues_url;
    public readonly string $keys_url;
    public readonly string $labels_url;
    public readonly ?string $language;
    public readonly string $languages_url;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NewRepository\License $license;
    public readonly ?string $master_branch;
    public readonly string $merges_url;
    public readonly string $milestones_url;
    public readonly ?string $mirror_url;
    /**
     * The name of the repository.
     */
    public readonly string $name;
    public readonly string $node_id;
    public readonly string $notifications_url;
    public readonly int $open_issues;
    public readonly int $open_issues_count;
    public readonly ?string $organization;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NewRepository\Owner $owner;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NewRepository\Permissions $permissions;
    /**
     * Whether the repository is private or public.
     */
    public readonly bool $private;
    public readonly ?bool $public;
    public readonly string $pulls_url;
    public readonly mixed $pushed_at;
    public readonly string $releases_url;
    public readonly ?string $role_name;
    public readonly int $size;
    public readonly string $ssh_url;
    public readonly ?int $stargazers;
    public readonly int $stargazers_count;
    public readonly string $stargazers_url;
    public readonly string $statuses_url;
    public readonly string $subscribers_url;
    public readonly string $subscription_url;
    public readonly string $svn_url;
    public readonly string $tags_url;
    public readonly string $teams_url;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NewRepository\Topics>
     */
    public readonly array $topics;
    public readonly string $trees_url;
    public readonly string $updated_at;
    public readonly string $url;
    public readonly string $visibility;
    public readonly int $watchers;
    public readonly int $watchers_count;
    /**
     * Whether to require contributors to sign off on web-based commits
     */
    public readonly ?bool $web_commit_signoff_required;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NewRepository\Topics> $topics
     */
    public function __construct(bool $allow_auto_merge, bool $allow_forking, bool $allow_merge_commit, bool $allow_rebase_merge, bool $allow_squash_merge, bool $allow_update_branch, string $archive_url, bool $archived, string $assignees_url, string $blobs_url, string $branches_url, string $clone_url, string $collaborators_url, string $comments_url, string $commits_url, string $compare_url, string $contents_url, string $contributors_url, mixed $created_at, string $default_branch, bool $delete_branch_on_merge, string $deployments_url, string $description, bool $disabled, string $downloads_url, string $events_url, bool $fork, int $forks, int $forks_count, string $forks_url, string $full_name, string $git_commits_url, string $git_refs_url, string $git_tags_url, string $git_url, bool $has_downloads, bool $has_issues, bool $has_pages, bool $has_projects, bool $has_wiki, bool $has_discussions, string $homepage, string $hooks_url, string $html_url, int $id, bool $is_template, string $issue_comment_url, string $issue_events_url, string $issues_url, string $keys_url, string $labels_url, string $language, string $languages_url, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NewRepository\License $license, string $master_branch, string $merges_url, string $milestones_url, string $mirror_url, string $name, string $node_id, string $notifications_url, int $open_issues, int $open_issues_count, string $organization, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NewRepository\Owner $owner, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NewRepository\Permissions $permissions, bool $private, bool $public, string $pulls_url, mixed $pushed_at, string $releases_url, string $role_name, int $size, string $ssh_url, int $stargazers, int $stargazers_count, string $stargazers_url, string $statuses_url, string $subscribers_url, string $subscription_url, string $svn_url, string $tags_url, string $teams_url, array $topics, string $trees_url, string $updated_at, string $url, string $visibility, int $watchers, int $watchers_count, bool $web_commit_signoff_required)
    {
        $this->allow_auto_merge = $allow_auto_merge;
        $this->allow_forking = $allow_forking;
        $this->allow_merge_commit = $allow_merge_commit;
        $this->allow_rebase_merge = $allow_rebase_merge;
        $this->allow_squash_merge = $allow_squash_merge;
        $this->allow_update_branch = $allow_update_branch;
        $this->archive_url = $archive_url;
        $this->archived = $archived;
        $this->assignees_url = $assignees_url;
        $this->blobs_url = $blobs_url;
        $this->branches_url = $branches_url;
        $this->clone_url = $clone_url;
        $this->collaborators_url = $collaborators_url;
        $this->comments_url = $comments_url;
        $this->commits_url = $commits_url;
        $this->compare_url = $compare_url;
        $this->contents_url = $contents_url;
        $this->contributors_url = $contributors_url;
        $this->created_at = $created_at;
        $this->default_branch = $default_branch;
        $this->delete_branch_on_merge = $delete_branch_on_merge;
        $this->deployments_url = $deployments_url;
        $this->description = $description;
        $this->disabled = $disabled;
        $this->downloads_url = $downloads_url;
        $this->events_url = $events_url;
        $this->fork = $fork;
        $this->forks = $forks;
        $this->forks_count = $forks_count;
        $this->forks_url = $forks_url;
        $this->full_name = $full_name;
        $this->git_commits_url = $git_commits_url;
        $this->git_refs_url = $git_refs_url;
        $this->git_tags_url = $git_tags_url;
        $this->git_url = $git_url;
        $this->has_downloads = $has_downloads;
        $this->has_issues = $has_issues;
        $this->has_pages = $has_pages;
        $this->has_projects = $has_projects;
        $this->has_wiki = $has_wiki;
        $this->has_discussions = $has_discussions;
        $this->homepage = $homepage;
        $this->hooks_url = $hooks_url;
        $this->html_url = $html_url;
        $this->id = $id;
        $this->is_template = $is_template;
        $this->issue_comment_url = $issue_comment_url;
        $this->issue_events_url = $issue_events_url;
        $this->issues_url = $issues_url;
        $this->keys_url = $keys_url;
        $this->labels_url = $labels_url;
        $this->language = $language;
        $this->languages_url = $languages_url;
        $this->license = $license;
        $this->master_branch = $master_branch;
        $this->merges_url = $merges_url;
        $this->milestones_url = $milestones_url;
        $this->mirror_url = $mirror_url;
        $this->name = $name;
        $this->node_id = $node_id;
        $this->notifications_url = $notifications_url;
        $this->open_issues = $open_issues;
        $this->open_issues_count = $open_issues_count;
        $this->organization = $organization;
        $this->owner = $owner;
        $this->permissions = $permissions;
        $this->private = $private;
        $this->public = $public;
        $this->pulls_url = $pulls_url;
        $this->pushed_at = $pushed_at;
        $this->releases_url = $releases_url;
        $this->role_name = $role_name;
        $this->size = $size;
        $this->ssh_url = $ssh_url;
        $this->stargazers = $stargazers;
        $this->stargazers_count = $stargazers_count;
        $this->stargazers_url = $stargazers_url;
        $this->statuses_url = $statuses_url;
        $this->subscribers_url = $subscribers_url;
        $this->subscription_url = $subscription_url;
        $this->svn_url = $svn_url;
        $this->tags_url = $tags_url;
        $this->teams_url = $teams_url;
        $this->topics = $topics;
        $this->trees_url = $trees_url;
        $this->updated_at = $updated_at;
        $this->url = $url;
        $this->visibility = $visibility;
        $this->watchers = $watchers;
        $this->watchers_count = $watchers_count;
        $this->web_commit_signoff_required = $web_commit_signoff_required;
    }
}
