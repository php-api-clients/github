<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments\CbCommentIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForIssueCommentOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForIssueCommentOperation;

final class Reactions
{
    function get($owner, $repo, $comment_id, $content, int $per_page = 30, int $page = 1): ListForIssueCommentOperation
    {
        return new ListForIssueCommentOperation($owner, $repo, $comment_id, $content, $per_page, $page);
    }

    function post($owner, $repo, $comment_id): CreateForIssueCommentOperation
    {
        return new CreateForIssueCommentOperation($owner, $repo, $comment_id);
    }
}
