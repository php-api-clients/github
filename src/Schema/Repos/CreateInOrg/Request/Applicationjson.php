<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\CreateInOrg\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"The name of the repository."},"description":{"type":"string","description":"A short description of the repository."},"homepage":{"type":"string","description":"A URL with more information about the repository."},"private":{"type":"boolean","description":"Whether the repository is private.","default":false},"visibility":{"enum":["public","private"],"type":"string","description":"The visibility of the repository."},"has_issues":{"type":"boolean","description":"Either `true` to enable issues for this repository or `false` to disable them.","default":true},"has_projects":{"type":"boolean","description":"Either `true` to enable projects for this repository or `false` to disable them. **Note:** If you\'re creating a repository in an organization that has disabled repository projects, the default is `false`, and if you pass `true`, the API returns an error.","default":true},"has_wiki":{"type":"boolean","description":"Either `true` to enable the wiki for this repository or `false` to disable it.","default":true},"has_downloads":{"type":"boolean","description":"Whether downloads are enabled.","default":true,"examples":[true]},"is_template":{"type":"boolean","description":"Either `true` to make this repo available as a template repository or `false` to prevent it.","default":false},"team_id":{"type":"integer","description":"The id of the team that will be granted access to this repository. This is only valid when creating a repository in an organization."},"auto_init":{"type":"boolean","description":"Pass `true` to create an initial commit with empty README.","default":false},"gitignore_template":{"type":"string","description":"Desired language or platform [.gitignore template](https:\\/\\/github.com\\/github\\/gitignore) to apply. Use the name of the template without the extension. For example, \\"Haskell\\"."},"license_template":{"type":"string","description":"Choose an [open source license template](https:\\/\\/choosealicense.com\\/) that best suits your needs, and then use the [license keyword](https:\\/\\/docs.github.com\\/articles\\/licensing-a-repository\\/#searching-github-by-license-type) as the `license_template` string. For example, \\"mit\\" or \\"mpl-2.0\\"."},"allow_squash_merge":{"type":"boolean","description":"Either `true` to allow squash-merging pull requests, or `false` to prevent squash-merging.","default":true},"allow_merge_commit":{"type":"boolean","description":"Either `true` to allow merging pull requests with a merge commit, or `false` to prevent merging pull requests with merge commits.","default":true},"allow_rebase_merge":{"type":"boolean","description":"Either `true` to allow rebase-merging pull requests, or `false` to prevent rebase-merging.","default":true},"allow_auto_merge":{"type":"boolean","description":"Either `true` to allow auto-merge on pull requests, or `false` to disallow auto-merge.","default":false},"delete_branch_on_merge":{"type":"boolean","description":"Either `true` to allow automatically deleting head branches when pull requests are merged, or `false` to prevent automatic deletion. **The authenticated user must be an organization owner to set this property to `true`.**","default":false},"use_squash_pr_title_as_default":{"type":"boolean","description":"Either `true` to allow squash-merge commits to use pull request title, or `false` to use commit message. **This property has been deprecated. Please use `squash_merge_commit_title` instead.","default":false,"deprecated":true},"squash_merge_commit_title":{"enum":["PR_TITLE","COMMIT_OR_PR_TITLE"],"type":"string","description":"The default value for a squash merge commit title:\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `COMMIT_OR_PR_TITLE` - default to the commit\'s title (if only one commit) or the pull request\'s title (when more than one commit)."},"squash_merge_commit_message":{"enum":["PR_BODY","COMMIT_MESSAGES","BLANK"],"type":"string","description":"The default value for a squash merge commit message:\\n\\n- `PR_BODY` - default to the pull request\'s body.\\n- `COMMIT_MESSAGES` - default to the branch\'s commit messages.\\n- `BLANK` - default to a blank commit message."},"merge_commit_title":{"enum":["PR_TITLE","MERGE_MESSAGE"],"type":"string","description":"The default value for a merge commit title.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name)."},"merge_commit_message":{"enum":["PR_BODY","PR_TITLE","BLANK"],"type":"string","description":"The default value for a merge commit message.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `PR_BODY` - default to the pull request\'s body.\\n- `BLANK` - default to a blank commit message."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","description":"generated_description_null","homepage":"generated_homepage_null","private":false,"visibility":"generated_visibility_null","has_issues":false,"has_projects":false,"has_wiki":false,"has_downloads":true,"is_template":false,"team_id":13,"auto_init":false,"gitignore_template":"generated_gitignore_template_null","license_template":"generated_license_template_null","allow_squash_merge":false,"allow_merge_commit":false,"allow_rebase_merge":false,"allow_auto_merge":false,"delete_branch_on_merge":false,"use_squash_pr_title_as_default":false,"squash_merge_commit_title":"generated_squash_merge_commit_title_null","squash_merge_commit_message":"generated_squash_merge_commit_message_null","merge_commit_title":"generated_merge_commit_title_null","merge_commit_message":"generated_merge_commit_message_null"}';
    /**
    * name: The name of the repository.
    * description: A short description of the repository.
    * homepage: A URL with more information about the repository.
    * private: Whether the repository is private.
    * visibility: The visibility of the repository.
    * has_issues: Either `true` to enable issues for this repository or `false` to disable them.
    * has_projects: Either `true` to enable projects for this repository or `false` to disable them. **Note:** If you're creating a repository in an organization that has disabled repository projects, the default is `false`, and if you pass `true`, the API returns an error.
    * has_wiki: Either `true` to enable the wiki for this repository or `false` to disable it.
    * has_downloads: Whether downloads are enabled.
    * is_template: Either `true` to make this repo available as a template repository or `false` to prevent it.
    * team_id: The id of the team that will be granted access to this repository. This is only valid when creating a repository in an organization.
    * auto_init: Pass `true` to create an initial commit with empty README.
    * gitignore_template: Desired language or platform [.gitignore template](https://github.com/github/gitignore) to apply. Use the name of the template without the extension. For example, "Haskell".
    * license_template: Choose an [open source license template](https://choosealicense.com/) that best suits your needs, and then use the [license keyword](https://docs.github.com/articles/licensing-a-repository/#searching-github-by-license-type) as the `license_template` string. For example, "mit" or "mpl-2.0".
    * allow_squash_merge: Either `true` to allow squash-merging pull requests, or `false` to prevent squash-merging.
    * allow_merge_commit: Either `true` to allow merging pull requests with a merge commit, or `false` to prevent merging pull requests with merge commits.
    * allow_rebase_merge: Either `true` to allow rebase-merging pull requests, or `false` to prevent rebase-merging.
    * allow_auto_merge: Either `true` to allow auto-merge on pull requests, or `false` to disallow auto-merge.
    * delete_branch_on_merge: Either `true` to allow automatically deleting head branches when pull requests are merged, or `false` to prevent automatic deletion. **The authenticated user must be an organization owner to set this property to `true`.**
    * use_squash_pr_title_as_default: Either `true` to allow squash-merge commits to use pull request title, or `false` to use commit message. **This property has been deprecated. Please use `squash_merge_commit_title` instead.
    * squash_merge_commit_title: The default value for a squash merge commit title:
    
    - `PR_TITLE` - default to the pull request's title.
    - `COMMIT_OR_PR_TITLE` - default to the commit's title (if only one commit) or the pull request's title (when more than one commit).
    * squash_merge_commit_message: The default value for a squash merge commit message:
    
    - `PR_BODY` - default to the pull request's body.
    - `COMMIT_MESSAGES` - default to the branch's commit messages.
    - `BLANK` - default to a blank commit message.
    * merge_commit_title: The default value for a merge commit title.
    
    - `PR_TITLE` - default to the pull request's title.
    - `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name).
    * merge_commit_message: The default value for a merge commit message.
    
    - `PR_TITLE` - default to the pull request's title.
    - `PR_BODY` - default to the pull request's body.
    - `BLANK` - default to a blank commit message.
    */
    public function __construct(public string $name, public ?string $description, public ?string $homepage, public ?bool $private, public ?string $visibility, public ?bool $has_issues, public ?bool $has_projects, public ?bool $has_wiki, public ?bool $has_downloads, public ?bool $is_template, public ?int $team_id, public ?bool $auto_init, public ?string $gitignore_template, public ?string $license_template, public ?bool $allow_squash_merge, public ?bool $allow_merge_commit, public ?bool $allow_rebase_merge, public ?bool $allow_auto_merge, public ?bool $delete_branch_on_merge, public ?bool $use_squash_pr_title_as_default, public ?string $squash_merge_commit_title, public ?string $squash_merge_commit_message, public ?string $merge_commit_title, public ?string $merge_commit_message)
    {
    }
}
