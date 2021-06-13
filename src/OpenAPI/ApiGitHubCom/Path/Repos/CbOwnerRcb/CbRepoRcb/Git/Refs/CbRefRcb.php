<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Refs;

final class CbRefRcb
{
    function delete($owner, $repo, $ref) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\DeleteRef
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\DeleteRef($owner, $repo, $ref);
    }
    function patch($owner, $repo, $ref) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\UpdateRef
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\UpdateRef($owner, $repo, $ref);
    }
}
