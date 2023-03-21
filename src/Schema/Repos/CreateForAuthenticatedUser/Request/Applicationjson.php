<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\CreateForAuthenticatedUser\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"The name of the repository.","examples":["Team Environment"]},"description":{"type":"string","description":"A short description of the repository."},"homepage":{"type":"string","description":"A URL with more information about the repository."},"private":{"type":"boolean","description":"Whether the repository is private.","default":false},"has_issues":{"type":"boolean","description":"Whether issues are enabled.","default":true,"examples":[true]},"has_projects":{"type":"boolean","description":"Whether projects are enabled.","default":true,"examples":[true]},"has_wiki":{"type":"boolean","description":"Whether the wiki is enabled.","default":true,"examples":[true]},"has_discussions":{"type":"boolean","description":"Whether discussions are enabled.","default":false,"examples":[true]},"team_id":{"type":"integer","description":"The id of the team that will be granted access to this repository. This is only valid when creating a repository in an organization."},"auto_init":{"type":"boolean","description":"Whether the repository is initialized with a minimal README.","default":false},"gitignore_template":{"type":"string","description":"The desired language or platform to apply to the .gitignore.","examples":["Haskell"]},"license_template":{"type":"string","description":"The license keyword of the open source license for this repository.","examples":["mit"]},"allow_squash_merge":{"type":"boolean","description":"Whether to allow squash merges for pull requests.","default":true,"examples":[true]},"allow_merge_commit":{"type":"boolean","description":"Whether to allow merge commits for pull requests.","default":true,"examples":[true]},"allow_rebase_merge":{"type":"boolean","description":"Whether to allow rebase merges for pull requests.","default":true,"examples":[true]},"allow_auto_merge":{"type":"boolean","description":"Whether to allow Auto-merge to be used on pull requests.","default":false,"examples":[false]},"delete_branch_on_merge":{"type":"boolean","description":"Whether to delete head branches when pull requests are merged","default":false,"examples":[false]},"squash_merge_commit_title":{"enum":["PR_TITLE","COMMIT_OR_PR_TITLE"],"type":"string","description":"The default value for a squash merge commit title:\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `COMMIT_OR_PR_TITLE` - default to the commit\'s title (if only one commit) or the pull request\'s title (when more than one commit)."},"squash_merge_commit_message":{"enum":["PR_BODY","COMMIT_MESSAGES","BLANK"],"type":"string","description":"The default value for a squash merge commit message:\\n\\n- `PR_BODY` - default to the pull request\'s body.\\n- `COMMIT_MESSAGES` - default to the branch\'s commit messages.\\n- `BLANK` - default to a blank commit message."},"merge_commit_title":{"enum":["PR_TITLE","MERGE_MESSAGE"],"type":"string","description":"The default value for a merge commit title.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name)."},"merge_commit_message":{"enum":["PR_BODY","PR_TITLE","BLANK"],"type":"string","description":"The default value for a merge commit message.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `PR_BODY` - default to the pull request\'s body.\\n- `BLANK` - default to a blank commit message."},"has_downloads":{"type":"boolean","description":"Whether downloads are enabled.","default":true,"examples":[true]},"is_template":{"type":"boolean","description":"Whether this repository acts as a template that can be used to generate new repositories.","default":false,"examples":[true]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"Team Environment","description":"generated_description_null","homepage":"generated_homepage_null","private":false,"has_issues":true,"has_projects":true,"has_wiki":true,"has_discussions":true,"team_id":13,"auto_init":false,"gitignore_template":"Haskell","license_template":"mit","allow_squash_merge":true,"allow_merge_commit":true,"allow_rebase_merge":true,"allow_auto_merge":false,"delete_branch_on_merge":false,"squash_merge_commit_title":"generated_squash_merge_commit_title_null","squash_merge_commit_message":"generated_squash_merge_commit_message_null","merge_commit_title":"generated_merge_commit_title_null","merge_commit_message":"generated_merge_commit_message_null","has_downloads":true,"is_template":true}';
    /**
    * name: The name of the repository.
    * description: A short description of the repository.
    * homepage: A URL with more information about the repository.
    * private: Whether the repository is private.
    * has_issues: Whether issues are enabled.
    * has_projects: Whether projects are enabled.
    * has_wiki: Whether the wiki is enabled.
    * has_discussions: Whether discussions are enabled.
    * team_id: The id of the team that will be granted access to this repository. This is only valid when creating a repository in an organization.
    * auto_init: Whether the repository is initialized with a minimal README.
    * gitignore_template: The desired language or platform to apply to the .gitignore.
    * license_template: The license keyword of the open source license for this repository.
    * allow_squash_merge: Whether to allow squash merges for pull requests.
    * allow_merge_commit: Whether to allow merge commits for pull requests.
    * allow_rebase_merge: Whether to allow rebase merges for pull requests.
    * allow_auto_merge: Whether to allow Auto-merge to be used on pull requests.
    * delete_branch_on_merge: Whether to delete head branches when pull requests are merged
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
    * has_downloads: Whether downloads are enabled.
    * is_template: Whether this repository acts as a template that can be used to generate new repositories.
    */
    public function __construct(public string $name, public ?string $description, public ?string $homepage, public ?bool $private, public ?bool $has_issues, public ?bool $has_projects, public ?bool $has_wiki, public ?bool $has_discussions, public ?int $team_id, public ?bool $auto_init, public ?string $gitignore_template, public ?string $license_template, public ?bool $allow_squash_merge, public ?bool $allow_merge_commit, public ?bool $allow_rebase_merge, public ?bool $allow_auto_merge, public ?bool $delete_branch_on_merge, public ?string $squash_merge_commit_title, public ?string $squash_merge_commit_message, public ?string $merge_commit_title, public ?string $merge_commit_message, public ?bool $has_downloads, public ?bool $is_template)
    {
    }
}
