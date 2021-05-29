<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Reactions;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForIssue;

final class CbReactionIdRcb
{
    function delete($owner, $repo, $issue_number, $reaction_id): DeleteForIssue
    {
        return new DeleteForIssue($owner, $repo, $issue_number, $reaction_id);
    }
}
