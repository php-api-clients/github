<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class DependencyGraph
{
    public function diffRange_($owner, $repo, $basehead, $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\DependencyGraph\DiffRange_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\DependencyGraph\DiffRange_($owner, $repo, $basehead, $name);
    }
}
