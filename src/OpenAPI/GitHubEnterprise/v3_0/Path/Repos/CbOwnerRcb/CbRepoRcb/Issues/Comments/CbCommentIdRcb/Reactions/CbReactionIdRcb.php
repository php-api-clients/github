<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments\CbCommentIdRcb\Reactions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Reactions\DeleteForIssueComment;

final class CbReactionIdRcb
{
    function delete($owner, $repo, $comment_id, $reaction_id): DeleteForIssueComment
    {
        return new DeleteForIssueComment($owner, $repo, $comment_id, $reaction_id);
    }
}
