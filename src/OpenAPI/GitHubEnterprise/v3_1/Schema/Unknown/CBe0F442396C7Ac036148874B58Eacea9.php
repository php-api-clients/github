<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CBe0F442396C7Ac036148874B58Eacea9
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"The name of the repository."},"description":{"type":"string","description":"A short description of the repository."},"homepage":{"type":"string","description":"A URL with more information about the repository."},"private":{"type":"boolean","description":"Either `true` to make the repository private or `false` to make it public. Default: `false`.  \\n**Note**: You will get a `422` error if the organization restricts [changing repository visibility](https:\\/\\/docs.github.com\\/articles\\/repository-permission-levels-for-an-organization#changing-the-visibility-of-repositories) to organization owners and a non-owner tries to change the value of private. **Note**: You will get a `422` error if the organization restricts [changing repository visibility](https:\\/\\/docs.github.com\\/articles\\/repository-permission-levels-for-an-organization#changing-the-visibility-of-repositories) to organization owners and a non-owner tries to change the value of private.","default":false},"visibility":{"enum":["public","private","internal"],"type":"string","description":"Can be `public` or `private`. If your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+, `visibility` can also be `internal`. The `visibility` parameter overrides the `private` parameter when you use both along with the `nebula-preview` preview header."},"has_issues":{"type":"boolean","description":"Either `true` to enable issues for this repository or `false` to disable them.","default":true},"has_projects":{"type":"boolean","description":"Either `true` to enable projects for this repository or `false` to disable them. **Note:** If you\'re creating a repository in an organization that has disabled repository projects, the default is `false`, and if you pass `true`, the API returns an error.","default":true},"has_wiki":{"type":"boolean","description":"Either `true` to enable the wiki for this repository or `false` to disable it.","default":true},"is_template":{"type":"boolean","description":"Either `true` to make this repo available as a template repository or `false` to prevent it.","default":false},"default_branch":{"type":"string","description":"Updates the default branch for this repository."},"allow_squash_merge":{"type":"boolean","description":"Either `true` to allow squash-merging pull requests, or `false` to prevent squash-merging.","default":true},"allow_merge_commit":{"type":"boolean","description":"Either `true` to allow merging pull requests with a merge commit, or `false` to prevent merging pull requests with merge commits.","default":true},"allow_rebase_merge":{"type":"boolean","description":"Either `true` to allow rebase-merging pull requests, or `false` to prevent rebase-merging.","default":true},"delete_branch_on_merge":{"type":"boolean","description":"Either `true` to allow automatically deleting head branches when pull requests are merged, or `false` to prevent automatic deletion.","default":false},"allow_update_branch":{"type":"boolean","description":"Either `true` to always allow a pull request head branch that is behind its base branch to be updated even if it is not required to be up to date before merging, or false otherwise.","default":false},"use_squash_pr_title_as_default":{"type":"boolean","description":"Either `true` to allow squash-merge commits to use pull request title, or `false` to use commit message.","default":false},"archived":{"type":"boolean","description":"`true` to archive this repository. **Note**: You cannot unarchive repositories through the API.","default":false},"allow_forking":{"type":"boolean","description":"Either `true` to allow private forks, or `false` to prevent private forks.","default":false}}}';
    public const SCHEMA_TITLE = 'c_be0f442396c7ac036148874b58eacea9';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the repository.
     */
    private string $name;
    /**
     * A short description of the repository.
     */
    private string $description;
    /**
     * A URL with more information about the repository.
     */
    private string $homepage;
    /**
    * Either `true` to make the repository private or `false` to make it public. Default: `false`.  
    **Note**: You will get a `422` error if the organization restricts [changing repository visibility](https://docs.github.com/articles/repository-permission-levels-for-an-organization#changing-the-visibility-of-repositories) to organization owners and a non-owner tries to change the value of private. **Note**: You will get a `422` error if the organization restricts [changing repository visibility](https://docs.github.com/articles/repository-permission-levels-for-an-organization#changing-the-visibility-of-repositories) to organization owners and a non-owner tries to change the value of private.
    */
    private bool $private;
    /**
     * Can be `public` or `private`. If your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+, `visibility` can also be `internal`. The `visibility` parameter overrides the `private` parameter when you use both along with the `nebula-preview` preview header.
     */
    private string $visibility;
    /**
     * Either `true` to enable issues for this repository or `false` to disable them.
     */
    private bool $has_issues;
    /**
     * Either `true` to enable projects for this repository or `false` to disable them. **Note:** If you're creating a repository in an organization that has disabled repository projects, the default is `false`, and if you pass `true`, the API returns an error.
     */
    private bool $has_projects;
    /**
     * Either `true` to enable the wiki for this repository or `false` to disable it.
     */
    private bool $has_wiki;
    /**
     * Either `true` to make this repo available as a template repository or `false` to prevent it.
     */
    private bool $is_template;
    /**
     * Updates the default branch for this repository.
     */
    private string $default_branch;
    /**
     * Either `true` to allow squash-merging pull requests, or `false` to prevent squash-merging.
     */
    private bool $allow_squash_merge;
    /**
     * Either `true` to allow merging pull requests with a merge commit, or `false` to prevent merging pull requests with merge commits.
     */
    private bool $allow_merge_commit;
    /**
     * Either `true` to allow rebase-merging pull requests, or `false` to prevent rebase-merging.
     */
    private bool $allow_rebase_merge;
    /**
     * Either `true` to allow automatically deleting head branches when pull requests are merged, or `false` to prevent automatic deletion.
     */
    private bool $delete_branch_on_merge;
    /**
     * Either `true` to always allow a pull request head branch that is behind its base branch to be updated even if it is not required to be up to date before merging, or false otherwise.
     */
    private bool $allow_update_branch;
    /**
     * Either `true` to allow squash-merge commits to use pull request title, or `false` to use commit message.
     */
    private bool $use_squash_pr_title_as_default;
    /**
     * `true` to archive this repository. **Note**: You cannot unarchive repositories through the API.
     */
    private bool $archived;
    /**
     * Either `true` to allow private forks, or `false` to prevent private forks.
     */
    private bool $allow_forking;
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
    public function description() : string
    {
        return $this->description;
    }
    /**
     * A URL with more information about the repository.
     */
    public function homepage() : string
    {
        return $this->homepage;
    }
    /**
    * Either `true` to make the repository private or `false` to make it public. Default: `false`.  
    **Note**: You will get a `422` error if the organization restricts [changing repository visibility](https://docs.github.com/articles/repository-permission-levels-for-an-organization#changing-the-visibility-of-repositories) to organization owners and a non-owner tries to change the value of private. **Note**: You will get a `422` error if the organization restricts [changing repository visibility](https://docs.github.com/articles/repository-permission-levels-for-an-organization#changing-the-visibility-of-repositories) to organization owners and a non-owner tries to change the value of private.
    */
    public function private() : bool
    {
        return $this->private;
    }
    /**
     * Can be `public` or `private`. If your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+, `visibility` can also be `internal`. The `visibility` parameter overrides the `private` parameter when you use both along with the `nebula-preview` preview header.
     */
    public function visibility() : string
    {
        return $this->visibility;
    }
    /**
     * Either `true` to enable issues for this repository or `false` to disable them.
     */
    public function has_issues() : bool
    {
        return $this->has_issues;
    }
    /**
     * Either `true` to enable projects for this repository or `false` to disable them. **Note:** If you're creating a repository in an organization that has disabled repository projects, the default is `false`, and if you pass `true`, the API returns an error.
     */
    public function has_projects() : bool
    {
        return $this->has_projects;
    }
    /**
     * Either `true` to enable the wiki for this repository or `false` to disable it.
     */
    public function has_wiki() : bool
    {
        return $this->has_wiki;
    }
    /**
     * Either `true` to make this repo available as a template repository or `false` to prevent it.
     */
    public function is_template() : bool
    {
        return $this->is_template;
    }
    /**
     * Updates the default branch for this repository.
     */
    public function default_branch() : string
    {
        return $this->default_branch;
    }
    /**
     * Either `true` to allow squash-merging pull requests, or `false` to prevent squash-merging.
     */
    public function allow_squash_merge() : bool
    {
        return $this->allow_squash_merge;
    }
    /**
     * Either `true` to allow merging pull requests with a merge commit, or `false` to prevent merging pull requests with merge commits.
     */
    public function allow_merge_commit() : bool
    {
        return $this->allow_merge_commit;
    }
    /**
     * Either `true` to allow rebase-merging pull requests, or `false` to prevent rebase-merging.
     */
    public function allow_rebase_merge() : bool
    {
        return $this->allow_rebase_merge;
    }
    /**
     * Either `true` to allow automatically deleting head branches when pull requests are merged, or `false` to prevent automatic deletion.
     */
    public function delete_branch_on_merge() : bool
    {
        return $this->delete_branch_on_merge;
    }
    /**
     * Either `true` to always allow a pull request head branch that is behind its base branch to be updated even if it is not required to be up to date before merging, or false otherwise.
     */
    public function allow_update_branch() : bool
    {
        return $this->allow_update_branch;
    }
    /**
     * Either `true` to allow squash-merge commits to use pull request title, or `false` to use commit message.
     */
    public function use_squash_pr_title_as_default() : bool
    {
        return $this->use_squash_pr_title_as_default;
    }
    /**
     * `true` to archive this repository. **Note**: You cannot unarchive repositories through the API.
     */
    public function archived() : bool
    {
        return $this->archived;
    }
    /**
     * Either `true` to allow private forks, or `false` to prevent private forks.
     */
    public function allow_forking() : bool
    {
        return $this->allow_forking;
    }
}
