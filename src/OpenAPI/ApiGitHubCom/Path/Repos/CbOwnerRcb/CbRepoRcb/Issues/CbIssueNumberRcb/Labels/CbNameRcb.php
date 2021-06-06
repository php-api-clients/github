<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Labels;

final class CbNameRcb
{
    function delete($owner, $repo, $issue_number, $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\RemoveLabel
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\RemoveLabel($owner, $repo, $issue_number, $name);
    }
}
