<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOrgRcb\CbRepoRcb\Actions;

final class RequiredWorkflows
{
    function get($org, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoRequiredWorkflows
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoRequiredWorkflows($org, $repo, $per_page, $page);
    }
}
