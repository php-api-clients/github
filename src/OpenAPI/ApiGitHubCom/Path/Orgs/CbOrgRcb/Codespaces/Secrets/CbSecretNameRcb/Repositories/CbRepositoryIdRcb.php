<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb\Repositories;

final class CbRepositoryIdRcb
{
    function put($org, $secret_name, $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\AddSelectedRepoToOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\AddSelectedRepoToOrgSecret($org, $secret_name, $repository_id);
    }
    function delete($org, $secret_name, $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RemoveSelectedRepoFromOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RemoveSelectedRepoFromOrgSecret($org, $secret_name, $repository_id);
    }
}
