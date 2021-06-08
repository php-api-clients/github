<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments\CbCommentIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Reactions\CreateForIssueComment;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Reactions\ListForIssueComment;

final class Reactions
{
    function get($owner, $repo, $comment_id, $content, int $per_page = 30, int $page = 1): ListForIssueComment
    {
        return new ListForIssueComment($owner, $repo, $comment_id, $content, $per_page, $page);
    }

    function post($owner, $repo, $comment_id): CreateForIssueComment
    {
        return new CreateForIssueComment($owner, $repo, $comment_id);
    }
}
