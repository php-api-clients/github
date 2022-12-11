<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb;

final class Repositories
{
    function get($org, $secret_name, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListSelectedReposForOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListSelectedReposForOrgSecret($org, $secret_name, $page, $per_page);
    }
    function put($org, $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetSelectedReposForOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetSelectedReposForOrgSecret($org, $secret_name);
    }
}
