<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPullRequestEdited;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class PullRequest
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"allow_auto_merge":{"type":"boolean","description":"Whether to allow auto-merge for pull requests.","default":false},"allow_update_branch":{"type":"boolean","description":"Whether to allow updating the pull request\'s branch."},"delete_branch_on_merge":{"type":"boolean","description":"Whether to delete head branches when pull requests are merged.","default":false},"merge_commit_message":{"enum":["PR_BODY","PR_TITLE","BLANK"],"type":"string","description":"The default value for a merge commit message.\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `PR_BODY` - default to the pull request\'s body.\\n- `BLANK` - default to a blank commit message."},"merge_commit_title":{"enum":["PR_TITLE","MERGE_MESSAGE"],"type":"string","description":"The default value for a merge commit title.\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., \\"Merge pull request #123 from branch-name\\")."},"squash_merge_commit_message":{"enum":["PR_BODY","COMMIT_MESSAGES","BLANK"],"type":"string","description":"The default value for a squash merge commit message:\\n- `PR_BODY` - default to the pull request\'s body.\\n- `COMMIT_MESSAGES` - default to the branch\'s commit messages.\\n- `BLANK` - default to a blank commit message."},"squash_merge_commit_title":{"enum":["PR_TITLE","COMMIT_OR_PR_TITLE"],"type":"string","description":"The default value for a squash merge commit title:\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `COMMIT_OR_PR_TITLE` - default to the commit\'s title (if only one commit) or the pull request\'s title (when more than one commit)."},"use_squash_pr_title_as_default":{"type":"boolean","description":"Whether a squash merge commit can use the pull request title as default. **This property has been deprecated. Please use `squash_merge_commit_title` instead.","default":false}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"allow_auto_merge":false,"allow_update_branch":false,"delete_branch_on_merge":false,"merge_commit_message":"generated_merge_commit_message","merge_commit_title":"generated_merge_commit_title","squash_merge_commit_message":"generated_squash_merge_commit_message","squash_merge_commit_title":"generated_squash_merge_commit_title","use_squash_pr_title_as_default":false}';
    /**
    * allow_auto_merge: Whether to allow auto-merge for pull requests.
    * allow_update_branch: Whether to allow updating the pull request's branch.
    * delete_branch_on_merge: Whether to delete head branches when pull requests are merged.
    * merge_commit_message: The default value for a merge commit message.
    - `PR_TITLE` - default to the pull request's title.
    - `PR_BODY` - default to the pull request's body.
    - `BLANK` - default to a blank commit message.
    * merge_commit_title: The default value for a merge commit title.
    - `PR_TITLE` - default to the pull request's title.
    - `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., "Merge pull request #123 from branch-name").
    * squash_merge_commit_message: The default value for a squash merge commit message:
    - `PR_BODY` - default to the pull request's body.
    - `COMMIT_MESSAGES` - default to the branch's commit messages.
    - `BLANK` - default to a blank commit message.
    * squash_merge_commit_title: The default value for a squash merge commit title:
    - `PR_TITLE` - default to the pull request's title.
    - `COMMIT_OR_PR_TITLE` - default to the commit's title (if only one commit) or the pull request's title (when more than one commit).
    * use_squash_pr_title_as_default: Whether a squash merge commit can use the pull request title as default. **This property has been deprecated. Please use `squash_merge_commit_title` instead.
    */
    public function __construct(public ?bool $allow_auto_merge, public ?bool $allow_update_branch, public ?bool $delete_branch_on_merge, public ?string $merge_commit_message, public ?string $merge_commit_title, public ?string $squash_merge_commit_message, public ?string $squash_merge_commit_title, public ?bool $use_squash_pr_title_as_default)
    {
    }
}
