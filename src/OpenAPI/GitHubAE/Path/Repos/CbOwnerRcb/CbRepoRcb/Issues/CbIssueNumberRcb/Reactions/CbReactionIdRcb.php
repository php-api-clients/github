<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Reactions;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForIssueOperation;

final class CbReactionIdRcb
{
    function delete($owner, $repo, $issue_number, $reaction_id): DeleteForIssueOperation
    {
        return new DeleteForIssueOperation($owner, $repo, $issue_number, $reaction_id);
    }
}
