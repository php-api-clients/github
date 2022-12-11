<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\MatchingRefs;

final class CbRefRcb
{
    function get($owner, $repo, $ref) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\ListMatchingRefs
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\ListMatchingRefs($owner, $repo, $ref);
    }
}
