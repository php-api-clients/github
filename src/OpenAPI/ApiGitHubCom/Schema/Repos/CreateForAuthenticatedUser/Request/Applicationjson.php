<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repos\CreateForAuthenticatedUser\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"The name of the repository.","examples":["Team Environment"]},"description":{"type":"string","description":"A short description of the repository."},"homepage":{"type":"string","description":"A URL with more information about the repository."},"private":{"type":"boolean","description":"Whether the repository is private.","default":false},"has_issues":{"type":"boolean","description":"Whether issues are enabled.","default":true,"examples":[true]},"has_projects":{"type":"boolean","description":"Whether projects are enabled.","default":true,"examples":[true]},"has_wiki":{"type":"boolean","description":"Whether the wiki is enabled.","default":true,"examples":[true]},"has_discussions":{"type":"boolean","description":"Whether discussions are enabled.","default":false,"examples":[true]},"team_id":{"type":"integer","description":"The id of the team that will be granted access to this repository. This is only valid when creating a repository in an organization."},"auto_init":{"type":"boolean","description":"Whether the repository is initialized with a minimal README.","default":false},"gitignore_template":{"type":"string","description":"The desired language or platform to apply to the .gitignore.","examples":["Haskell"]},"license_template":{"type":"string","description":"The license keyword of the open source license for this repository.","examples":["mit"]},"allow_squash_merge":{"type":"boolean","description":"Whether to allow squash merges for pull requests.","default":true,"examples":[true]},"allow_merge_commit":{"type":"boolean","description":"Whether to allow merge commits for pull requests.","default":true,"examples":[true]},"allow_rebase_merge":{"type":"boolean","description":"Whether to allow rebase merges for pull requests.","default":true,"examples":[true]},"allow_auto_merge":{"type":"boolean","description":"Whether to allow Auto-merge to be used on pull requests.","default":false,"examples":[false]},"delete_branch_on_merge":{"type":"boolean","description":"Whether to delete head branches when pull requests are merged","default":false,"examples":[false]},"squash_merge_commit_title":{"enum":["PR_TITLE","COMMIT_OR_PR_TITLE"],"type":"string","description":"The default value for a squash merge commit title:\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `COMMIT_OR_PR_TITLE` - default to the commit\'s title (if only one commit) or the pull request\'s title (when more than one commit)."},"squash_merge_commit_message":{"enum":["PR_BODY","COMMIT_MESSAGES","BLANK"],"type":"string","description":"The default value for a squash merge commit message:\\n\\n- `PR_BODY` - default to the pull request\'s body.\\n- `COMMIT_MESSAGES` - default to the branch\'s commit messages.\\n- `BLANK` - default to a blank commit message."},"merge_commit_title":{"enum":["PR_TITLE","MERGE_MESSAGE"],"type":"string","description":"The default value for a merge commit title.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name)."},"merge_commit_message":{"enum":["PR_BODY","PR_TITLE","BLANK"],"type":"string","description":"The default value for a merge commit message.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `PR_BODY` - default to the pull request\'s body.\\n- `BLANK` - default to a blank commit message."},"has_downloads":{"type":"boolean","description":"Whether downloads are enabled.","default":true,"examples":[true]},"is_template":{"type":"boolean","description":"Whether this repository acts as a template that can be used to generate new repositories.","default":false,"examples":[true]}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the repository.
     */
    public ?string $name;
    /**
     * A short description of the repository.
     */
    public string $description;
    /**
     * A URL with more information about the repository.
     */
    public string $homepage;
    /**
     * Whether the repository is private.
     */
    public bool $private;
    /**
     * Whether issues are enabled.
     */
    public bool $has_issues;
    /**
     * Whether projects are enabled.
     */
    public bool $has_projects;
    /**
     * Whether the wiki is enabled.
     */
    public bool $has_wiki;
    /**
     * Whether discussions are enabled.
     */
    public bool $has_discussions;
    /**
     * The id of the team that will be granted access to this repository. This is only valid when creating a repository in an organization.
     */
    public int $team_id;
    /**
     * Whether the repository is initialized with a minimal README.
     */
    public bool $auto_init;
    /**
     * The desired language or platform to apply to the .gitignore.
     */
    public string $gitignore_template;
    /**
     * The license keyword of the open source license for this repository.
     */
    public string $license_template;
    /**
     * Whether to allow squash merges for pull requests.
     */
    public bool $allow_squash_merge;
    /**
     * Whether to allow merge commits for pull requests.
     */
    public bool $allow_merge_commit;
    /**
     * Whether to allow rebase merges for pull requests.
     */
    public bool $allow_rebase_merge;
    /**
     * Whether to allow Auto-merge to be used on pull requests.
     */
    public bool $allow_auto_merge;
    /**
     * Whether to delete head branches when pull requests are merged
     */
    public bool $delete_branch_on_merge;
    /**
     * The default value for a squash merge commit title:

    - `PR_TITLE` - default to the pull request's title.
    - `COMMIT_OR_PR_TITLE` - default to the commit's title (if only one commit) or the pull request's title (when more than one commit).
     */
    public string $squash_merge_commit_title;
    /**
     * The default value for a squash merge commit message:

    - `PR_BODY` - default to the pull request's body.
    - `COMMIT_MESSAGES` - default to the branch's commit messages.
    - `BLANK` - default to a blank commit message.
     */
    public string $squash_merge_commit_message;
    /**
     * The default value for a merge commit title.

    - `PR_TITLE` - default to the pull request's title.
    - `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name).
     */
    public string $merge_commit_title;
    /**
     * The default value for a merge commit message.

    - `PR_TITLE` - default to the pull request's title.
    - `PR_BODY` - default to the pull request's body.
    - `BLANK` - default to a blank commit message.
     */
    public string $merge_commit_message;
    /**
     * Whether downloads are enabled.
     */
    public bool $has_downloads;
    /**
     * Whether this repository acts as a template that can be used to generate new repositories.
     */
    public bool $is_template;

    public function __construct(string $name, string $description, string $homepage, bool $private, bool $has_issues, bool $has_projects, bool $has_wiki, bool $has_discussions, int $team_id, bool $auto_init, string $gitignore_template, string $license_template, bool $allow_squash_merge, bool $allow_merge_commit, bool $allow_rebase_merge, bool $allow_auto_merge, bool $delete_branch_on_merge, string $squash_merge_commit_title, string $squash_merge_commit_message, string $merge_commit_title, string $merge_commit_message, bool $has_downloads, bool $is_template)
    {
        $this->name                        = $name;
        $this->description                 = $description;
        $this->homepage                    = $homepage;
        $this->private                     = $private;
        $this->has_issues                  = $has_issues;
        $this->has_projects                = $has_projects;
        $this->has_wiki                    = $has_wiki;
        $this->has_discussions             = $has_discussions;
        $this->team_id                     = $team_id;
        $this->auto_init                   = $auto_init;
        $this->gitignore_template          = $gitignore_template;
        $this->license_template            = $license_template;
        $this->allow_squash_merge          = $allow_squash_merge;
        $this->allow_merge_commit          = $allow_merge_commit;
        $this->allow_rebase_merge          = $allow_rebase_merge;
        $this->allow_auto_merge            = $allow_auto_merge;
        $this->delete_branch_on_merge      = $delete_branch_on_merge;
        $this->squash_merge_commit_title   = $squash_merge_commit_title;
        $this->squash_merge_commit_message = $squash_merge_commit_message;
        $this->merge_commit_title          = $merge_commit_title;
        $this->merge_commit_message        = $merge_commit_message;
        $this->has_downloads               = $has_downloads;
        $this->is_template                 = $is_template;
    }
}
