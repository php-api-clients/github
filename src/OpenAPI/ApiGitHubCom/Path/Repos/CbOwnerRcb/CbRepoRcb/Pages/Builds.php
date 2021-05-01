<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Repos\CbOwnerRcb\CbRepoRcb\Pages;

final class Builds
{
    function get($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListPagesBuildsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListPagesBuildsOperation($owner, $repo, $per_page, $page);
    }
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RequestPagesBuildOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RequestPagesBuildOperation($owner, $repo);
    }
}