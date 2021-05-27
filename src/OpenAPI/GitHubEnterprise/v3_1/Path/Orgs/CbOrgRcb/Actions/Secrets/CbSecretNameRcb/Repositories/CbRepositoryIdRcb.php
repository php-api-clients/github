<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb\Repositories;

final class CbRepositoryIdRcb
{
    function put($org, $secret_name, $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\AddSelectedRepoToOrgSecretOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\AddSelectedRepoToOrgSecretOperation($org, $secret_name, $repository_id);
    }
    function delete($org, $secret_name, $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\RemoveSelectedRepoFromOrgSecretOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\RemoveSelectedRepoFromOrgSecretOperation($org, $secret_name, $repository_id);
    }
}
