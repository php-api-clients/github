<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Reactions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForIssueOperation;

final class CbReactionIdRcb
{
    function delete($owner, $repo, $issue_number, $reaction_id): DeleteForIssueOperation
    {
        return new DeleteForIssueOperation($owner, $repo, $issue_number, $reaction_id);
    }
}
