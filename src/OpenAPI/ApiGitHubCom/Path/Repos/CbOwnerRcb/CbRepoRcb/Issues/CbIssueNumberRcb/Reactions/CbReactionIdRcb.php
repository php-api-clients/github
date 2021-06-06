<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Reactions;

final class CbReactionIdRcb
{
    function delete($owner, $repo, $issue_number, $reaction_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForIssue
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForIssue($owner, $repo, $issue_number, $reaction_id);
    }
}
