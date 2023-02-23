<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Repos\Update\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"The name of the repository."},"description":{"type":"string","description":"A short description of the repository."},"homepage":{"type":"string","description":"A URL with more information about the repository."},"private":{"type":"boolean","description":"Either `true` to make the repository private or `false` to make it public. Default: `false`.  \\n**Note**: You will get a `422` error if the organization restricts [changing repository visibility](https:\\/\\/docs.github.com\\/articles\\/repository-permission-levels-for-an-organization#changing-the-visibility-of-repositories) to organization owners and a non-owner tries to change the value of private.","default":false},"visibility":{"enum":["public","private"],"type":"string","description":"The visibility of the repository."},"security_and_analysis":{"type":["object","null"],"properties":{"advanced_security":{"type":"object","properties":{"status":{"type":"string","description":"Can be `enabled` or `disabled`."}},"description":"Use the `status` property to enable or disable GitHub Advanced Security for this repository. For more information, see \\"[About GitHub Advanced Security](\\/github\\/getting-started-with-github\\/learning-about-github\\/about-github-advanced-security).\\""},"secret_scanning":{"type":"object","properties":{"status":{"type":"string","description":"Can be `enabled` or `disabled`."}},"description":"Use the `status` property to enable or disable secret scanning for this repository. For more information, see \\"[About secret scanning](\\/code-security\\/secret-security\\/about-secret-scanning).\\""},"secret_scanning_push_protection":{"type":"object","properties":{"status":{"type":"string","description":"Can be `enabled` or `disabled`."}},"description":"Use the `status` property to enable or disable secret scanning push protection for this repository. For more information, see \\"[Protecting pushes with secret scanning](\\/code-security\\/secret-scanning\\/protecting-pushes-with-secret-scanning).\\""}},"description":"Specify which security and analysis features to enable or disable for the repository.\\n\\nTo use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see \\"[Managing security managers in your organization](https:\\/\\/docs.github.com\\/organizations\\/managing-peoples-access-to-your-organization-with-roles\\/managing-security-managers-in-your-organization).\\"\\n\\nFor example, to enable GitHub Advanced Security, use this data in the body of the `PATCH` request:\\n`{ \\"security_and_analysis\\": {\\"advanced_security\\": { \\"status\\": \\"enabled\\" } } }`.\\n\\nYou can check which security and analysis features are currently enabled by using a `GET \\/repos\\/{owner}\\/{repo}` request."},"has_issues":{"type":"boolean","description":"Either `true` to enable issues for this repository or `false` to disable them.","default":true},"has_projects":{"type":"boolean","description":"Either `true` to enable projects for this repository or `false` to disable them. **Note:** If you\'re creating a repository in an organization that has disabled repository projects, the default is `false`, and if you pass `true`, the API returns an error.","default":true},"has_wiki":{"type":"boolean","description":"Either `true` to enable the wiki for this repository or `false` to disable it.","default":true},"is_template":{"type":"boolean","description":"Either `true` to make this repo available as a template repository or `false` to prevent it.","default":false},"default_branch":{"type":"string","description":"Updates the default branch for this repository."},"allow_squash_merge":{"type":"boolean","description":"Either `true` to allow squash-merging pull requests, or `false` to prevent squash-merging.","default":true},"allow_merge_commit":{"type":"boolean","description":"Either `true` to allow merging pull requests with a merge commit, or `false` to prevent merging pull requests with merge commits.","default":true},"allow_rebase_merge":{"type":"boolean","description":"Either `true` to allow rebase-merging pull requests, or `false` to prevent rebase-merging.","default":true},"allow_auto_merge":{"type":"boolean","description":"Either `true` to allow auto-merge on pull requests, or `false` to disallow auto-merge.","default":false},"delete_branch_on_merge":{"type":"boolean","description":"Either `true` to allow automatically deleting head branches when pull requests are merged, or `false` to prevent automatic deletion.","default":false},"allow_update_branch":{"type":"boolean","description":"Either `true` to always allow a pull request head branch that is behind its base branch to be updated even if it is not required to be up to date before merging, or false otherwise.","default":false},"use_squash_pr_title_as_default":{"type":"boolean","description":"Either `true` to allow squash-merge commits to use pull request title, or `false` to use commit message. **This property has been deprecated. Please use `squash_merge_commit_title` instead.","default":false,"deprecated":true},"squash_merge_commit_title":{"enum":["PR_TITLE","COMMIT_OR_PR_TITLE"],"type":"string","description":"The default value for a squash merge commit title:\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `COMMIT_OR_PR_TITLE` - default to the commit\'s title (if only one commit) or the pull request\'s title (when more than one commit)."},"squash_merge_commit_message":{"enum":["PR_BODY","COMMIT_MESSAGES","BLANK"],"type":"string","description":"The default value for a squash merge commit message:\\n\\n- `PR_BODY` - default to the pull request\'s body.\\n- `COMMIT_MESSAGES` - default to the branch\'s commit messages.\\n- `BLANK` - default to a blank commit message."},"merge_commit_title":{"enum":["PR_TITLE","MERGE_MESSAGE"],"type":"string","description":"The default value for a merge commit title.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name)."},"merge_commit_message":{"enum":["PR_BODY","PR_TITLE","BLANK"],"type":"string","description":"The default value for a merge commit message.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `PR_BODY` - default to the pull request\'s body.\\n- `BLANK` - default to a blank commit message."},"archived":{"type":"boolean","description":"Whether to archive this repository. `false` will unarchive a previously archived repository.","default":false},"allow_forking":{"type":"boolean","description":"Either `true` to allow private forks, or `false` to prevent private forks.","default":false},"web_commit_signoff_required":{"type":"boolean","description":"Either `true` to require contributors to sign off on web-based commits, or `false` to not require contributors to sign off on web-based commits.","default":false}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the repository.
     */
    public ?string $name;
    /**
     * A short description of the repository.
     */
    public ?string $description;
    /**
     * A URL with more information about the repository.
     */
    public ?string $homepage;
    /**
    * Either `true` to make the repository private or `false` to make it public. Default: `false`.  
    **Note**: You will get a `422` error if the organization restricts [changing repository visibility](https://docs.github.com/articles/repository-permission-levels-for-an-organization#changing-the-visibility-of-repositories) to organization owners and a non-owner tries to change the value of private.
    */
    public ?bool $private;
    /**
     * The visibility of the repository.
     */
    public ?string $visibility;
    /**
    * Specify which security and analysis features to enable or disable for the repository.
    
    To use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see "[Managing security managers in your organization](https://docs.github.com/organizations/managing-peoples-access-to-your-organization-with-roles/managing-security-managers-in-your-organization)."
    
    For example, to enable GitHub Advanced Security, use this data in the body of the `PATCH` request:
    `{ "security_and_analysis": {"advanced_security": { "status": "enabled" } } }`.
    
    You can check which security and analysis features are currently enabled by using a `GET /repos/{owner}/{repo}` request.
    */
    public ?\ApiClients\Client\Github\Schema\Repos\Update\Request\Applicationjson\SecurityAndAnalysis $security_and_analysis;
    /**
     * Either `true` to enable issues for this repository or `false` to disable them.
     */
    public ?bool $has_issues;
    /**
     * Either `true` to enable projects for this repository or `false` to disable them. **Note:** If you're creating a repository in an organization that has disabled repository projects, the default is `false`, and if you pass `true`, the API returns an error.
     */
    public ?bool $has_projects;
    /**
     * Either `true` to enable the wiki for this repository or `false` to disable it.
     */
    public ?bool $has_wiki;
    /**
     * Either `true` to make this repo available as a template repository or `false` to prevent it.
     */
    public ?bool $is_template;
    /**
     * Updates the default branch for this repository.
     */
    public ?string $default_branch;
    /**
     * Either `true` to allow squash-merging pull requests, or `false` to prevent squash-merging.
     */
    public ?bool $allow_squash_merge;
    /**
     * Either `true` to allow merging pull requests with a merge commit, or `false` to prevent merging pull requests with merge commits.
     */
    public ?bool $allow_merge_commit;
    /**
     * Either `true` to allow rebase-merging pull requests, or `false` to prevent rebase-merging.
     */
    public ?bool $allow_rebase_merge;
    /**
     * Either `true` to allow auto-merge on pull requests, or `false` to disallow auto-merge.
     */
    public ?bool $allow_auto_merge;
    /**
     * Either `true` to allow automatically deleting head branches when pull requests are merged, or `false` to prevent automatic deletion.
     */
    public ?bool $delete_branch_on_merge;
    /**
     * Either `true` to always allow a pull request head branch that is behind its base branch to be updated even if it is not required to be up to date before merging, or false otherwise.
     */
    public ?bool $allow_update_branch;
    /**
     * Either `true` to allow squash-merge commits to use pull request title, or `false` to use commit message. **This property has been deprecated. Please use `squash_merge_commit_title` instead.
     */
    public ?bool $use_squash_pr_title_as_default;
    /**
    * The default value for a squash merge commit title:
    
    - `PR_TITLE` - default to the pull request's title.
    - `COMMIT_OR_PR_TITLE` - default to the commit's title (if only one commit) or the pull request's title (when more than one commit).
    */
    public ?string $squash_merge_commit_title;
    /**
    * The default value for a squash merge commit message:
    
    - `PR_BODY` - default to the pull request's body.
    - `COMMIT_MESSAGES` - default to the branch's commit messages.
    - `BLANK` - default to a blank commit message.
    */
    public ?string $squash_merge_commit_message;
    /**
    * The default value for a merge commit title.
    
    - `PR_TITLE` - default to the pull request's title.
    - `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name).
    */
    public ?string $merge_commit_title;
    /**
    * The default value for a merge commit message.
    
    - `PR_TITLE` - default to the pull request's title.
    - `PR_BODY` - default to the pull request's body.
    - `BLANK` - default to a blank commit message.
    */
    public ?string $merge_commit_message;
    /**
     * Whether to archive this repository. `false` will unarchive a previously archived repository.
     */
    public ?bool $archived;
    /**
     * Either `true` to allow private forks, or `false` to prevent private forks.
     */
    public ?bool $allow_forking;
    /**
     * Either `true` to require contributors to sign off on web-based commits, or `false` to not require contributors to sign off on web-based commits.
     */
    public ?bool $web_commit_signoff_required;
    public function __construct(string $name, string $description, string $homepage, bool $private, string $visibility, \ApiClients\Client\Github\Schema\Repos\Update\Request\Applicationjson\SecurityAndAnalysis $security_and_analysis, bool $has_issues, bool $has_projects, bool $has_wiki, bool $is_template, string $default_branch, bool $allow_squash_merge, bool $allow_merge_commit, bool $allow_rebase_merge, bool $allow_auto_merge, bool $delete_branch_on_merge, bool $allow_update_branch, bool $use_squash_pr_title_as_default, string $squash_merge_commit_title, string $squash_merge_commit_message, string $merge_commit_title, string $merge_commit_message, bool $archived, bool $allow_forking, bool $web_commit_signoff_required)
    {
        $this->name = $name;
        $this->description = $description;
        $this->homepage = $homepage;
        $this->private = $private;
        $this->visibility = $visibility;
        $this->security_and_analysis = $security_and_analysis;
        $this->has_issues = $has_issues;
        $this->has_projects = $has_projects;
        $this->has_wiki = $has_wiki;
        $this->is_template = $is_template;
        $this->default_branch = $default_branch;
        $this->allow_squash_merge = $allow_squash_merge;
        $this->allow_merge_commit = $allow_merge_commit;
        $this->allow_rebase_merge = $allow_rebase_merge;
        $this->allow_auto_merge = $allow_auto_merge;
        $this->delete_branch_on_merge = $delete_branch_on_merge;
        $this->allow_update_branch = $allow_update_branch;
        $this->use_squash_pr_title_as_default = $use_squash_pr_title_as_default;
        $this->squash_merge_commit_title = $squash_merge_commit_title;
        $this->squash_merge_commit_message = $squash_merge_commit_message;
        $this->merge_commit_title = $merge_commit_title;
        $this->merge_commit_message = $merge_commit_message;
        $this->archived = $archived;
        $this->allow_forking = $allow_forking;
        $this->web_commit_signoff_required = $web_commit_signoff_required;
    }
}
