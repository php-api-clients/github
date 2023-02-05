<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class MinimalRepository
{
    public const SCHEMA_JSON = '{"title":"Minimal Repository","required":["archive_url","assignees_url","blobs_url","branches_url","collaborators_url","comments_url","commits_url","compare_url","contents_url","contributors_url","deployments_url","description","downloads_url","events_url","fork","forks_url","full_name","git_commits_url","git_refs_url","git_tags_url","hooks_url","html_url","id","node_id","issue_comment_url","issue_events_url","issues_url","keys_url","labels_url","languages_url","merges_url","milestones_url","name","notifications_url","owner","private","pulls_url","releases_url","stargazers_url","statuses_url","subscribers_url","subscription_url","tags_url","teams_url","trees_url","url"],"type":"object","properties":{"id":{"type":"integer","examples":[1296269]},"node_id":{"type":"string","examples":["MDEwOlJlcG9zaXRvcnkxMjk2MjY5"]},"name":{"type":"string","examples":["Hello-World"]},"full_name":{"type":"string","examples":["octocat\\/Hello-World"]},"owner":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"private":{"type":"boolean"},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World"]},"description":{"type":["string","null"],"examples":["This your first repo!"]},"fork":{"type":"boolean"},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World"]},"archive_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/{archive_format}{\\/ref}"]},"assignees_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/assignees{\\/user}"]},"blobs_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs{\\/sha}"]},"branches_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches{\\/branch}"]},"collaborators_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/collaborators{\\/collaborator}"]},"comments_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/comments{\\/number}"]},"commits_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits{\\/sha}"]},"compare_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/compare\\/{base}...{head}"]},"contents_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/{+path}"]},"contributors_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contributors"]},"deployments_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/deployments"]},"downloads_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/downloads"]},"events_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/events"]},"forks_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/forks"]},"git_commits_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/commits{\\/sha}"]},"git_refs_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/refs{\\/sha}"]},"git_tags_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/tags{\\/sha}"]},"git_url":{"type":"string"},"issue_comment_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments{\\/number}"]},"issue_events_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/events{\\/number}"]},"issues_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues{\\/number}"]},"keys_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/keys{\\/key_id}"]},"labels_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/labels{\\/name}"]},"languages_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/languages"]},"merges_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/merges"]},"milestones_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones{\\/number}"]},"notifications_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/notifications{?since,all,participating}"]},"pulls_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls{\\/number}"]},"releases_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/releases{\\/id}"]},"ssh_url":{"type":"string"},"stargazers_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers"]},"statuses_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}"]},"subscribers_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers"]},"subscription_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription"]},"tags_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags"]},"teams_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams"]},"trees_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}"]},"clone_url":{"type":"string"},"mirror_url":{"type":["string","null"]},"hooks_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks"]},"svn_url":{"type":"string"},"homepage":{"type":["string","null"]},"language":{"type":["string","null"]},"forks_count":{"type":"integer"},"stargazers_count":{"type":"integer"},"watchers_count":{"type":"integer"},"size":{"type":"integer","description":"The size of the repository. Size is calculated hourly. When a repository is initially created, the size is 0."},"default_branch":{"type":"string"},"open_issues_count":{"type":"integer"},"is_template":{"type":"boolean"},"topics":{"type":"array","items":{"type":"string"}},"has_issues":{"type":"boolean"},"has_projects":{"type":"boolean"},"has_wiki":{"type":"boolean"},"has_pages":{"type":"boolean"},"has_downloads":{"type":"boolean"},"has_discussions":{"type":"boolean"},"archived":{"type":"boolean"},"disabled":{"type":"boolean"},"visibility":{"type":"string"},"pushed_at":{"type":["string","null"],"format":"date-time","examples":["2011-01-26T19:06:43Z"]},"created_at":{"type":["string","null"],"format":"date-time","examples":["2011-01-26T19:01:12Z"]},"updated_at":{"type":["string","null"],"format":"date-time","examples":["2011-01-26T19:14:43Z"]},"permissions":{"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"},"pull":{"type":"boolean"}}},"role_name":{"type":"string","examples":["admin"]},"temp_clone_token":{"type":"string"},"delete_branch_on_merge":{"type":"boolean"},"subscribers_count":{"type":"integer"},"network_count":{"type":"integer"},"code_of_conduct":{"title":"Code Of Conduct","required":["url","html_url","key","name"],"type":"object","properties":{"key":{"type":"string","examples":["contributor_covenant"]},"name":{"type":"string","examples":["Contributor Covenant"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/codes_of_conduct\\/contributor_covenant"]},"body":{"type":"string","examples":["# Contributor Covenant Code of Conduct\\n\\n## Our Pledge\\n\\nIn the interest of fostering an open and welcoming environment, we as contributors and maintainers pledge to making participation in our project and our community a harassment-free experience for everyone, regardless of age, body size, disability, ethnicity, gender identity and expression, level of experience, nationality, personal appearance, race, religion, or sexual identity and orientation.\\n\\n## Our Standards\\n\\nExamples of behavior that contributes to creating a positive environment include:\\n\\n* Using welcoming and inclusive language\\n* Being respectful of differing viewpoints and experiences\\n* Gracefully accepting constructive criticism\\n* Focusing on what is best for the community\\n* Showing empathy towards other community members\\n\\nExamples of unacceptable behavior by participants include:\\n\\n* The use of sexualized language or imagery and unwelcome sexual attention or advances\\n* Trolling, insulting\\/derogatory comments, and personal or political attacks\\n* Public or private harassment\\n* Publishing others\' private information, such as a physical or electronic address, without explicit permission\\n* Other conduct which could reasonably be considered inappropriate in a professional setting\\n\\n## Our Responsibilities\\n\\nProject maintainers are responsible for clarifying the standards of acceptable behavior and are expected to take appropriate and fair corrective action in response\\n                  to any instances of unacceptable behavior.\\n\\nProject maintainers have the right and responsibility to remove, edit, or reject comments, commits, code, wiki edits, issues, and other contributions that are not aligned to this Code of Conduct, or to ban temporarily or permanently any contributor for other behaviors that they deem inappropriate, threatening, offensive, or harmful.\\n\\n## Scope\\n\\nThis Code of Conduct applies both within project spaces and in public spaces when an individual is representing the project or its community. Examples of representing a project or community include using an official project e-mail address,\\n                  posting via an official social media account, or acting as an appointed representative at an online or offline event. Representation of a project may be further defined and clarified by project maintainers.\\n\\n## Enforcement\\n\\nInstances of abusive, harassing, or otherwise unacceptable behavior may be reported by contacting the project team at [EMAIL]. The project team will review and investigate all complaints, and will respond in a way that it deems appropriate to the circumstances. The project team is obligated to maintain confidentiality with regard to the reporter of an incident. Further details of specific enforcement policies may be posted separately.\\n\\nProject maintainers who do not follow or enforce the Code of Conduct in good faith may face temporary or permanent repercussions as determined by other members of the project\'s leadership.\\n\\n## Attribution\\n\\nThis Code of Conduct is adapted from the [Contributor Covenant][homepage], version 1.4, available at [http:\\/\\/contributor-covenant.org\\/version\\/1\\/4][version]\\n\\n[homepage]: http:\\/\\/contributor-covenant.org\\n[version]: http:\\/\\/contributor-covenant.org\\/version\\/1\\/4\\/\\n"]},"html_url":{"type":["string","null"],"format":"uri"}},"description":"Code Of Conduct"},"license":{"type":["object","null"],"properties":{"key":{"type":"string"},"name":{"type":"string"},"spdx_id":{"type":"string"},"url":{"type":"string"},"node_id":{"type":"string"}}},"forks":{"type":"integer","examples":[0]},"open_issues":{"type":"integer","examples":[0]},"watchers":{"type":"integer","examples":[0]},"allow_forking":{"type":"boolean"},"web_commit_signoff_required":{"type":"boolean","examples":[false]},"security_and_analysis":{"type":["object","null"],"properties":{"advanced_security":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}},"secret_scanning":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}},"secret_scanning_push_protection":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}}}}},"description":"Minimal Repository"}';
    public const SCHEMA_TITLE = 'Minimal Repository';
    public const SCHEMA_DESCRIPTION = 'Minimal Repository';
    public readonly int $id;
    public readonly string $node_id;
    public readonly string $name;
    public readonly string $full_name;
    /**
     * A GitHub user.
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $owner;
    public readonly bool $private;
    public readonly string $html_url;
    public readonly ?string $description;
    public readonly bool $fork;
    public readonly string $url;
    public readonly string $archive_url;
    public readonly string $assignees_url;
    public readonly string $blobs_url;
    public readonly string $branches_url;
    public readonly string $collaborators_url;
    public readonly string $comments_url;
    public readonly string $commits_url;
    public readonly string $compare_url;
    public readonly string $contents_url;
    public readonly string $contributors_url;
    public readonly string $deployments_url;
    public readonly string $downloads_url;
    public readonly string $events_url;
    public readonly string $forks_url;
    public readonly string $git_commits_url;
    public readonly string $git_refs_url;
    public readonly string $git_tags_url;
    public readonly ?string $git_url;
    public readonly string $issue_comment_url;
    public readonly string $issue_events_url;
    public readonly string $issues_url;
    public readonly string $keys_url;
    public readonly string $labels_url;
    public readonly string $languages_url;
    public readonly string $merges_url;
    public readonly string $milestones_url;
    public readonly string $notifications_url;
    public readonly string $pulls_url;
    public readonly string $releases_url;
    public readonly ?string $ssh_url;
    public readonly string $stargazers_url;
    public readonly string $statuses_url;
    public readonly string $subscribers_url;
    public readonly string $subscription_url;
    public readonly string $tags_url;
    public readonly string $teams_url;
    public readonly string $trees_url;
    public readonly ?string $clone_url;
    public readonly ?string $mirror_url;
    public readonly string $hooks_url;
    public readonly ?string $svn_url;
    public readonly ?string $homepage;
    public readonly ?string $language;
    public readonly ?int $forks_count;
    public readonly ?int $stargazers_count;
    public readonly ?int $watchers_count;
    /**
     * The size of the repository. Size is calculated hourly. When a repository is initially created, the size is 0.
     */
    public readonly ?int $size;
    public readonly ?string $default_branch;
    public readonly ?int $open_issues_count;
    public readonly ?bool $is_template;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository\Topics>
     */
    public readonly array $topics;
    public readonly ?bool $has_issues;
    public readonly ?bool $has_projects;
    public readonly ?bool $has_wiki;
    public readonly ?bool $has_pages;
    public readonly ?bool $has_downloads;
    public readonly ?bool $has_discussions;
    public readonly ?bool $archived;
    public readonly ?bool $disabled;
    public readonly ?string $visibility;
    public readonly ?string $pushed_at;
    public readonly ?string $created_at;
    public readonly ?string $updated_at;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository\Permissions $permissions;
    public readonly ?string $role_name;
    public readonly ?string $temp_clone_token;
    public readonly ?bool $delete_branch_on_merge;
    public readonly ?int $subscribers_count;
    public readonly ?int $network_count;
    /**
     * Code Of Conduct
     */
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeOfConduct $code_of_conduct;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository\License $license;
    public readonly ?int $forks;
    public readonly ?int $open_issues;
    public readonly ?int $watchers;
    public readonly ?bool $allow_forking;
    public readonly ?bool $web_commit_signoff_required;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis $security_and_analysis;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository\Topics> $topics
     */
    public function __construct(int $id, string $node_id, string $name, string $full_name, object $owner, bool $private, string $html_url, string $description, bool $fork, string $url, string $archive_url, string $assignees_url, string $blobs_url, string $branches_url, string $collaborators_url, string $comments_url, string $commits_url, string $compare_url, string $contents_url, string $contributors_url, string $deployments_url, string $downloads_url, string $events_url, string $forks_url, string $git_commits_url, string $git_refs_url, string $git_tags_url, string $git_url, string $issue_comment_url, string $issue_events_url, string $issues_url, string $keys_url, string $labels_url, string $languages_url, string $merges_url, string $milestones_url, string $notifications_url, string $pulls_url, string $releases_url, string $ssh_url, string $stargazers_url, string $statuses_url, string $subscribers_url, string $subscription_url, string $tags_url, string $teams_url, string $trees_url, string $clone_url, string $mirror_url, string $hooks_url, string $svn_url, string $homepage, string $language, int $forks_count, int $stargazers_count, int $watchers_count, int $size, string $default_branch, int $open_issues_count, bool $is_template, array $topics, bool $has_issues, bool $has_projects, bool $has_wiki, bool $has_pages, bool $has_downloads, bool $has_discussions, bool $archived, bool $disabled, string $visibility, string $pushed_at, string $created_at, string $updated_at, object $permissions, string $role_name, string $temp_clone_token, bool $delete_branch_on_merge, int $subscribers_count, int $network_count, object $code_of_conduct, object $license, int $forks, int $open_issues, int $watchers, bool $allow_forking, bool $web_commit_signoff_required, object $security_and_analysis)
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
        $this->archive_url = $archive_url;
        $this->assignees_url = $assignees_url;
        $this->blobs_url = $blobs_url;
        $this->branches_url = $branches_url;
        $this->collaborators_url = $collaborators_url;
        $this->comments_url = $comments_url;
        $this->commits_url = $commits_url;
        $this->compare_url = $compare_url;
        $this->contents_url = $contents_url;
        $this->contributors_url = $contributors_url;
        $this->deployments_url = $deployments_url;
        $this->downloads_url = $downloads_url;
        $this->events_url = $events_url;
        $this->forks_url = $forks_url;
        $this->git_commits_url = $git_commits_url;
        $this->git_refs_url = $git_refs_url;
        $this->git_tags_url = $git_tags_url;
        $this->git_url = $git_url;
        $this->issue_comment_url = $issue_comment_url;
        $this->issue_events_url = $issue_events_url;
        $this->issues_url = $issues_url;
        $this->keys_url = $keys_url;
        $this->labels_url = $labels_url;
        $this->languages_url = $languages_url;
        $this->merges_url = $merges_url;
        $this->milestones_url = $milestones_url;
        $this->notifications_url = $notifications_url;
        $this->pulls_url = $pulls_url;
        $this->releases_url = $releases_url;
        $this->ssh_url = $ssh_url;
        $this->stargazers_url = $stargazers_url;
        $this->statuses_url = $statuses_url;
        $this->subscribers_url = $subscribers_url;
        $this->subscription_url = $subscription_url;
        $this->tags_url = $tags_url;
        $this->teams_url = $teams_url;
        $this->trees_url = $trees_url;
        $this->clone_url = $clone_url;
        $this->mirror_url = $mirror_url;
        $this->hooks_url = $hooks_url;
        $this->svn_url = $svn_url;
        $this->homepage = $homepage;
        $this->language = $language;
        $this->forks_count = $forks_count;
        $this->stargazers_count = $stargazers_count;
        $this->watchers_count = $watchers_count;
        $this->size = $size;
        $this->default_branch = $default_branch;
        $this->open_issues_count = $open_issues_count;
        $this->is_template = $is_template;
        $this->topics = $topics;
        $this->has_issues = $has_issues;
        $this->has_projects = $has_projects;
        $this->has_wiki = $has_wiki;
        $this->has_pages = $has_pages;
        $this->has_downloads = $has_downloads;
        $this->has_discussions = $has_discussions;
        $this->archived = $archived;
        $this->disabled = $disabled;
        $this->visibility = $visibility;
        $this->pushed_at = $pushed_at;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->permissions = $permissions;
        $this->role_name = $role_name;
        $this->temp_clone_token = $temp_clone_token;
        $this->delete_branch_on_merge = $delete_branch_on_merge;
        $this->subscribers_count = $subscribers_count;
        $this->network_count = $network_count;
        $this->code_of_conduct = $code_of_conduct;
        $this->license = $license;
        $this->forks = $forks;
        $this->open_issues = $open_issues;
        $this->watchers = $watchers;
        $this->allow_forking = $allow_forking;
        $this->web_commit_signoff_required = $web_commit_signoff_required;
        $this->security_and_analysis = $security_and_analysis;
    }
}
