<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class DependencyGraph
{
    public function diffRange_(string $owner, string $repo, string $basehead, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\DependencyGraph\DiffRange_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\DependencyGraph\DiffRange_($owner, $repo, $basehead, $name);
    }
    public function createRepositorySnapshot_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\DependencyGraph\CreateRepositorySnapshot_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\DependencyGraph\CreateRepositorySnapshot_($owner, $repo);
    }
}
