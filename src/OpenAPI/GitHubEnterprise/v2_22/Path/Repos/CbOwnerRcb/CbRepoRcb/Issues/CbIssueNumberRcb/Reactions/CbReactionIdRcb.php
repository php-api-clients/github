<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Reactions;

final class CbReactionIdRcb
{
    function delete($owner, $repo, $issue_number, $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Reactions\DeleteForIssueOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Reactions\DeleteForIssueOperation($owner, $repo, $issue_number, $reaction_id);
    }
}
