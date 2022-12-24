<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C35B797C61D161Cc4F31708Fec9Cc7780
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"The name of the repository.","examples":["Team Environment"]},"description":{"type":"string","description":"A short description of the repository."},"homepage":{"type":"string","description":"A URL with more information about the repository."},"private":{"type":"boolean","description":"Whether the repository is private.","default":false},"has_issues":{"type":"boolean","description":"Whether issues are enabled.","default":true,"examples":[true]},"has_projects":{"type":"boolean","description":"Whether projects are enabled.","default":true,"examples":[true]},"has_wiki":{"type":"boolean","description":"Whether the wiki is enabled.","default":true,"examples":[true]},"has_discussions":{"type":"boolean","description":"Whether discussions are enabled.","default":false,"examples":[true]},"team_id":{"type":"integer","description":"The id of the team that will be granted access to this repository. This is only valid when creating a repository in an organization."},"auto_init":{"type":"boolean","description":"Whether the repository is initialized with a minimal README.","default":false},"gitignore_template":{"type":"string","description":"The desired language or platform to apply to the .gitignore.","examples":["Haskell"]},"license_template":{"type":"string","description":"The license keyword of the open source license for this repository.","examples":["mit"]},"allow_squash_merge":{"type":"boolean","description":"Whether to allow squash merges for pull requests.","default":true,"examples":[true]},"allow_merge_commit":{"type":"boolean","description":"Whether to allow merge commits for pull requests.","default":true,"examples":[true]},"allow_rebase_merge":{"type":"boolean","description":"Whether to allow rebase merges for pull requests.","default":true,"examples":[true]},"allow_auto_merge":{"type":"boolean","description":"Whether to allow Auto-merge to be used on pull requests.","default":false,"examples":[false]},"delete_branch_on_merge":{"type":"boolean","description":"Whether to delete head branches when pull requests are merged","default":false,"examples":[false]},"squash_merge_commit_title":{"enum":["PR_TITLE","COMMIT_OR_PR_TITLE"],"type":"string","description":"The default value for a squash merge commit title:\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `COMMIT_OR_PR_TITLE` - default to the commit\'s title (if only one commit) or the pull request\'s title (when more than one commit)."},"squash_merge_commit_message":{"enum":["PR_BODY","COMMIT_MESSAGES","BLANK"],"type":"string","description":"The default value for a squash merge commit message:\\n\\n- `PR_BODY` - default to the pull request\'s body.\\n- `COMMIT_MESSAGES` - default to the branch\'s commit messages.\\n- `BLANK` - default to a blank commit message."},"merge_commit_title":{"enum":["PR_TITLE","MERGE_MESSAGE"],"type":"string","description":"The default value for a merge commit title.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name)."},"merge_commit_message":{"enum":["PR_BODY","PR_TITLE","BLANK"],"type":"string","description":"The default value for a merge commit message.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `PR_BODY` - default to the pull request\'s body.\\n- `BLANK` - default to a blank commit message."},"has_downloads":{"type":"boolean","description":"Whether downloads are enabled.","default":true,"examples":[true]},"is_template":{"type":"boolean","description":"Whether this repository acts as a template that can be used to generate new repositories.","default":false,"examples":[true]}}}';
    public const SCHEMA_TITLE = 'c_35b797c61d161cc4f31708fec9cc7780';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the repository.
     */
    private string $name;
    /**
     * A short description of the repository.
     */
    private ?string $description = null;
    /**
     * A URL with more information about the repository.
     */
    private ?string $homepage = null;
    /**
     * Whether the repository is private.
     */
    private ?bool $private = null;
    /**
     * Whether issues are enabled.
     */
    private ?bool $has_issues = null;
    /**
     * Whether projects are enabled.
     */
    private ?bool $has_projects = null;
    /**
     * Whether the wiki is enabled.
     */
    private ?bool $has_wiki = null;
    /**
     * Whether discussions are enabled.
     */
    private ?bool $has_discussions = null;
    /**
     * The id of the team that will be granted access to this repository. This is only valid when creating a repository in an organization.
     */
    private ?int $team_id = null;
    /**
     * Whether the repository is initialized with a minimal README.
     */
    private ?bool $auto_init = null;
    /**
     * The desired language or platform to apply to the .gitignore.
     */
    private ?string $gitignore_template = null;
    /**
     * The license keyword of the open source license for this repository.
     */
    private ?string $license_template = null;
    /**
     * Whether to allow squash merges for pull requests.
     */
    private ?bool $allow_squash_merge = null;
    /**
     * Whether to allow merge commits for pull requests.
     */
    private ?bool $allow_merge_commit = null;
    /**
     * Whether to allow rebase merges for pull requests.
     */
    private ?bool $allow_rebase_merge = null;
    /**
     * Whether to allow Auto-merge to be used on pull requests.
     */
    private ?bool $allow_auto_merge = null;
    /**
     * Whether to delete head branches when pull requests are merged
     */
    private ?bool $delete_branch_on_merge = null;
    /**
    * The default value for a squash merge commit title:
    
    - `PR_TITLE` - default to the pull request's title.
    - `COMMIT_OR_PR_TITLE` - default to the commit's title (if only one commit) or the pull request's title (when more than one commit).
    */
    private ?string $squash_merge_commit_title = null;
    /**
    * The default value for a squash merge commit message:
    
    - `PR_BODY` - default to the pull request's body.
    - `COMMIT_MESSAGES` - default to the branch's commit messages.
    - `BLANK` - default to a blank commit message.
    */
    private ?string $squash_merge_commit_message = null;
    /**
    * The default value for a merge commit title.
    
    - `PR_TITLE` - default to the pull request's title.
    - `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name).
    */
    private ?string $merge_commit_title = null;
    /**
    * The default value for a merge commit message.
    
    - `PR_TITLE` - default to the pull request's title.
    - `PR_BODY` - default to the pull request's body.
    - `BLANK` - default to a blank commit message.
    */
    private ?string $merge_commit_message = null;
    /**
     * Whether downloads are enabled.
     */
    private ?bool $has_downloads = null;
    /**
     * Whether this repository acts as a template that can be used to generate new repositories.
     */
    private ?bool $is_template = null;
    /**
     * The name of the repository.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * A short description of the repository.
     */
    public function description() : ?string
    {
        return $this->description;
    }
    /**
     * A URL with more information about the repository.
     */
    public function homepage() : ?string
    {
        return $this->homepage;
    }
    /**
     * Whether the repository is private.
     */
    public function private() : ?bool
    {
        return $this->private;
    }
    /**
     * Whether issues are enabled.
     */
    public function has_issues() : ?bool
    {
        return $this->has_issues;
    }
    /**
     * Whether projects are enabled.
     */
    public function has_projects() : ?bool
    {
        return $this->has_projects;
    }
    /**
     * Whether the wiki is enabled.
     */
    public function has_wiki() : ?bool
    {
        return $this->has_wiki;
    }
    /**
     * Whether discussions are enabled.
     */
    public function has_discussions() : ?bool
    {
        return $this->has_discussions;
    }
    /**
     * The id of the team that will be granted access to this repository. This is only valid when creating a repository in an organization.
     */
    public function team_id() : ?int
    {
        return $this->team_id;
    }
    /**
     * Whether the repository is initialized with a minimal README.
     */
    public function auto_init() : ?bool
    {
        return $this->auto_init;
    }
    /**
     * The desired language or platform to apply to the .gitignore.
     */
    public function gitignore_template() : ?string
    {
        return $this->gitignore_template;
    }
    /**
     * The license keyword of the open source license for this repository.
     */
    public function license_template() : ?string
    {
        return $this->license_template;
    }
    /**
     * Whether to allow squash merges for pull requests.
     */
    public function allow_squash_merge() : ?bool
    {
        return $this->allow_squash_merge;
    }
    /**
     * Whether to allow merge commits for pull requests.
     */
    public function allow_merge_commit() : ?bool
    {
        return $this->allow_merge_commit;
    }
    /**
     * Whether to allow rebase merges for pull requests.
     */
    public function allow_rebase_merge() : ?bool
    {
        return $this->allow_rebase_merge;
    }
    /**
     * Whether to allow Auto-merge to be used on pull requests.
     */
    public function allow_auto_merge() : ?bool
    {
        return $this->allow_auto_merge;
    }
    /**
     * Whether to delete head branches when pull requests are merged
     */
    public function delete_branch_on_merge() : ?bool
    {
        return $this->delete_branch_on_merge;
    }
    /**
    * The default value for a squash merge commit title:
    
    - `PR_TITLE` - default to the pull request's title.
    - `COMMIT_OR_PR_TITLE` - default to the commit's title (if only one commit) or the pull request's title (when more than one commit).
    */
    public function squash_merge_commit_title() : ?string
    {
        return $this->squash_merge_commit_title;
    }
    /**
    * The default value for a squash merge commit message:
    
    - `PR_BODY` - default to the pull request's body.
    - `COMMIT_MESSAGES` - default to the branch's commit messages.
    - `BLANK` - default to a blank commit message.
    */
    public function squash_merge_commit_message() : ?string
    {
        return $this->squash_merge_commit_message;
    }
    /**
    * The default value for a merge commit title.
    
    - `PR_TITLE` - default to the pull request's title.
    - `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name).
    */
    public function merge_commit_title() : ?string
    {
        return $this->merge_commit_title;
    }
    /**
    * The default value for a merge commit message.
    
    - `PR_TITLE` - default to the pull request's title.
    - `PR_BODY` - default to the pull request's body.
    - `BLANK` - default to a blank commit message.
    */
    public function merge_commit_message() : ?string
    {
        return $this->merge_commit_message;
    }
    /**
     * Whether downloads are enabled.
     */
    public function has_downloads() : ?bool
    {
        return $this->has_downloads;
    }
    /**
     * Whether this repository acts as a template that can be used to generate new repositories.
     */
    public function is_template() : ?bool
    {
        return $this->is_template;
    }
}
