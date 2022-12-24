<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CA02E6D46Bbb6Eb880Fc33B568C5F435C
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"The name of the repository."},"description":{"type":"string","description":"A short description of the repository."},"homepage":{"type":"string","description":"A URL with more information about the repository."},"private":{"type":"boolean","description":"Whether the repository is private.","default":false},"visibility":{"enum":["public","private","internal"],"type":"string","description":"Can be `public` or `private`. If your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+, `visibility` can also be `internal`. Note: For GitHub Enterprise Server and GitHub AE, this endpoint will only list repositories available to all users on the enterprise. For more information, see \\"[Creating an internal repository](https:\\/\\/docs.github.com\\/github-ae@latest\\/github\\/creating-cloning-and-archiving-repositories\\/about-repository-visibility#about-internal-repositories)\\" in the GitHub Help documentation."},"has_issues":{"type":"boolean","description":"Either `true` to enable issues for this repository or `false` to disable them.","default":true},"has_projects":{"type":"boolean","description":"Either `true` to enable projects for this repository or `false` to disable them. **Note:** If you\'re creating a repository in an organization that has disabled repository projects, the default is `false`, and if you pass `true`, the API returns an error.","default":true},"has_wiki":{"type":"boolean","description":"Either `true` to enable the wiki for this repository or `false` to disable it.","default":true},"has_downloads":{"type":"boolean","description":"Whether downloads are enabled.","default":true,"examples":[true]},"is_template":{"type":"boolean","description":"Either `true` to make this repo available as a template repository or `false` to prevent it.","default":false},"team_id":{"type":"integer","description":"The id of the team that will be granted access to this repository. This is only valid when creating a repository in an organization."},"auto_init":{"type":"boolean","description":"Pass `true` to create an initial commit with empty README.","default":false},"gitignore_template":{"type":"string","description":"Desired language or platform [.gitignore template](https:\\/\\/github.com\\/github\\/gitignore) to apply. Use the name of the template without the extension. For example, \\"Haskell\\"."},"license_template":{"type":"string","description":"Choose an [open source license template](https:\\/\\/choosealicense.com\\/) that best suits your needs, and then use the [license keyword](https:\\/\\/docs.github.com\\/github-ae@latest\\/articles\\/licensing-a-repository\\/#searching-github-by-license-type) as the `license_template` string. For example, \\"mit\\" or \\"mpl-2.0\\"."},"allow_squash_merge":{"type":"boolean","description":"Either `true` to allow squash-merging pull requests, or `false` to prevent squash-merging.","default":true},"allow_merge_commit":{"type":"boolean","description":"Either `true` to allow merging pull requests with a merge commit, or `false` to prevent merging pull requests with merge commits.","default":true},"allow_rebase_merge":{"type":"boolean","description":"Either `true` to allow rebase-merging pull requests, or `false` to prevent rebase-merging.","default":true},"allow_auto_merge":{"type":"boolean","description":"Either `true` to allow auto-merge on pull requests, or `false` to disallow auto-merge.","default":false},"delete_branch_on_merge":{"type":"boolean","description":"Either `true` to allow automatically deleting head branches when pull requests are merged, or `false` to prevent automatic deletion.","default":false},"use_squash_pr_title_as_default":{"type":"boolean","description":"Either `true` to allow squash-merge commits to use pull request title, or `false` to use commit message. **This property has been deprecated. Please use `squash_merge_commit_title` instead.","default":false,"deprecated":true},"squash_merge_commit_title":{"enum":["PR_TITLE","COMMIT_OR_PR_TITLE"],"type":"string","description":"The default value for a squash merge commit title:\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `COMMIT_OR_PR_TITLE` - default to the commit\'s title (if only one commit) or the pull request\'s title (when more than one commit)."},"squash_merge_commit_message":{"enum":["PR_BODY","COMMIT_MESSAGES","BLANK"],"type":"string","description":"The default value for a squash merge commit message:\\n\\n- `PR_BODY` - default to the pull request\'s body.\\n- `COMMIT_MESSAGES` - default to the branch\'s commit messages.\\n- `BLANK` - default to a blank commit message."},"merge_commit_title":{"enum":["PR_TITLE","MERGE_MESSAGE"],"type":"string","description":"The default value for a merge commit title.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name)."},"merge_commit_message":{"enum":["PR_BODY","PR_TITLE","BLANK"],"type":"string","description":"The default value for a merge commit message.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `PR_BODY` - default to the pull request\'s body.\\n- `BLANK` - default to a blank commit message."}}}';
    public const SCHEMA_TITLE = 'c_a02e6d46bbb6eb880fc33b568c5f435c';
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
     * Can be `public` or `private`. If your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+, `visibility` can also be `internal`. Note: For GitHub Enterprise Server and GitHub AE, this endpoint will only list repositories available to all users on the enterprise. For more information, see "[Creating an internal repository](https://docs.github.com/github-ae@latest/github/creating-cloning-and-archiving-repositories/about-repository-visibility#about-internal-repositories)" in the GitHub Help documentation.
     */
    private ?string $visibility = null;
    /**
     * Either `true` to enable issues for this repository or `false` to disable them.
     */
    private ?bool $has_issues = null;
    /**
     * Either `true` to enable projects for this repository or `false` to disable them. **Note:** If you're creating a repository in an organization that has disabled repository projects, the default is `false`, and if you pass `true`, the API returns an error.
     */
    private ?bool $has_projects = null;
    /**
     * Either `true` to enable the wiki for this repository or `false` to disable it.
     */
    private ?bool $has_wiki = null;
    /**
     * Whether downloads are enabled.
     */
    private ?bool $has_downloads = null;
    /**
     * Either `true` to make this repo available as a template repository or `false` to prevent it.
     */
    private ?bool $is_template = null;
    /**
     * The id of the team that will be granted access to this repository. This is only valid when creating a repository in an organization.
     */
    private ?int $team_id = null;
    /**
     * Pass `true` to create an initial commit with empty README.
     */
    private ?bool $auto_init = null;
    /**
     * Desired language or platform [.gitignore template](https://github.com/github/gitignore) to apply. Use the name of the template without the extension. For example, "Haskell".
     */
    private ?string $gitignore_template = null;
    /**
     * Choose an [open source license template](https://choosealicense.com/) that best suits your needs, and then use the [license keyword](https://docs.github.com/github-ae@latest/articles/licensing-a-repository/#searching-github-by-license-type) as the `license_template` string. For example, "mit" or "mpl-2.0".
     */
    private ?string $license_template = null;
    /**
     * Either `true` to allow squash-merging pull requests, or `false` to prevent squash-merging.
     */
    private ?bool $allow_squash_merge = null;
    /**
     * Either `true` to allow merging pull requests with a merge commit, or `false` to prevent merging pull requests with merge commits.
     */
    private ?bool $allow_merge_commit = null;
    /**
     * Either `true` to allow rebase-merging pull requests, or `false` to prevent rebase-merging.
     */
    private ?bool $allow_rebase_merge = null;
    /**
     * Either `true` to allow auto-merge on pull requests, or `false` to disallow auto-merge.
     */
    private ?bool $allow_auto_merge = null;
    /**
     * Either `true` to allow automatically deleting head branches when pull requests are merged, or `false` to prevent automatic deletion.
     */
    private ?bool $delete_branch_on_merge = null;
    /**
     * Either `true` to allow squash-merge commits to use pull request title, or `false` to use commit message. **This property has been deprecated. Please use `squash_merge_commit_title` instead.
     */
    private ?bool $use_squash_pr_title_as_default = null;
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
     * Can be `public` or `private`. If your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+, `visibility` can also be `internal`. Note: For GitHub Enterprise Server and GitHub AE, this endpoint will only list repositories available to all users on the enterprise. For more information, see "[Creating an internal repository](https://docs.github.com/github-ae@latest/github/creating-cloning-and-archiving-repositories/about-repository-visibility#about-internal-repositories)" in the GitHub Help documentation.
     */
    public function visibility() : ?string
    {
        return $this->visibility;
    }
    /**
     * Either `true` to enable issues for this repository or `false` to disable them.
     */
    public function has_issues() : ?bool
    {
        return $this->has_issues;
    }
    /**
     * Either `true` to enable projects for this repository or `false` to disable them. **Note:** If you're creating a repository in an organization that has disabled repository projects, the default is `false`, and if you pass `true`, the API returns an error.
     */
    public function has_projects() : ?bool
    {
        return $this->has_projects;
    }
    /**
     * Either `true` to enable the wiki for this repository or `false` to disable it.
     */
    public function has_wiki() : ?bool
    {
        return $this->has_wiki;
    }
    /**
     * Whether downloads are enabled.
     */
    public function has_downloads() : ?bool
    {
        return $this->has_downloads;
    }
    /**
     * Either `true` to make this repo available as a template repository or `false` to prevent it.
     */
    public function is_template() : ?bool
    {
        return $this->is_template;
    }
    /**
     * The id of the team that will be granted access to this repository. This is only valid when creating a repository in an organization.
     */
    public function team_id() : ?int
    {
        return $this->team_id;
    }
    /**
     * Pass `true` to create an initial commit with empty README.
     */
    public function auto_init() : ?bool
    {
        return $this->auto_init;
    }
    /**
     * Desired language or platform [.gitignore template](https://github.com/github/gitignore) to apply. Use the name of the template without the extension. For example, "Haskell".
     */
    public function gitignore_template() : ?string
    {
        return $this->gitignore_template;
    }
    /**
     * Choose an [open source license template](https://choosealicense.com/) that best suits your needs, and then use the [license keyword](https://docs.github.com/github-ae@latest/articles/licensing-a-repository/#searching-github-by-license-type) as the `license_template` string. For example, "mit" or "mpl-2.0".
     */
    public function license_template() : ?string
    {
        return $this->license_template;
    }
    /**
     * Either `true` to allow squash-merging pull requests, or `false` to prevent squash-merging.
     */
    public function allow_squash_merge() : ?bool
    {
        return $this->allow_squash_merge;
    }
    /**
     * Either `true` to allow merging pull requests with a merge commit, or `false` to prevent merging pull requests with merge commits.
     */
    public function allow_merge_commit() : ?bool
    {
        return $this->allow_merge_commit;
    }
    /**
     * Either `true` to allow rebase-merging pull requests, or `false` to prevent rebase-merging.
     */
    public function allow_rebase_merge() : ?bool
    {
        return $this->allow_rebase_merge;
    }
    /**
     * Either `true` to allow auto-merge on pull requests, or `false` to disallow auto-merge.
     */
    public function allow_auto_merge() : ?bool
    {
        return $this->allow_auto_merge;
    }
    /**
     * Either `true` to allow automatically deleting head branches when pull requests are merged, or `false` to prevent automatic deletion.
     */
    public function delete_branch_on_merge() : ?bool
    {
        return $this->delete_branch_on_merge;
    }
    /**
     * Either `true` to allow squash-merge commits to use pull request title, or `false` to use commit message. **This property has been deprecated. Please use `squash_merge_commit_title` instead.
     */
    public function use_squash_pr_title_as_default() : ?bool
    {
        return $this->use_squash_pr_title_as_default;
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
}
