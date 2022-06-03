<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Codespaces;

final class Devcontainers
{
    function get(int $per_page = 30, int $page = 1, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser($per_page, $page, $owner, $repo);
    }
}
