<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb\Repositories;

final class CbRepositoryIdRcb
{
    function put($org, $secret_name, $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddSelectedRepoToOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddSelectedRepoToOrgSecret($org, $secret_name, $repository_id);
    }
    function delete($org, $secret_name, $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveSelectedRepoFromOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveSelectedRepoFromOrgSecret($org, $secret_name, $repository_id);
    }
}
