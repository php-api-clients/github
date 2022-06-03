<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\User\Installations\CbInstallationIdRcb\Repositories;

final class CbRepositoryIdRcb
{
    function put($installation_id, $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\AddRepoToInstallationForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\AddRepoToInstallationForAuthenticatedUser($installation_id, $repository_id);
    }
    function delete($installation_id, $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\RemoveRepoFromInstallationForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\RemoveRepoFromInstallationForAuthenticatedUser($installation_id, $repository_id);
    }
}
