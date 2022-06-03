<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\DependencyGraph\Compare;

final class CbBaseheadRcb
{
    function get($owner, $repo, $basehead, $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\DependencyGraph\DiffRange
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\DependencyGraph\DiffRange($owner, $repo, $basehead, $name);
    }
}
