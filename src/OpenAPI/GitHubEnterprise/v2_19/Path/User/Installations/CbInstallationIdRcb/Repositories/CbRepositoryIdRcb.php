<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\User\Installations\CbInstallationIdRcb\Repositories;

final class CbRepositoryIdRcb
{
    function put($installation_id, $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Apps\AddRepoToInstallation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Apps\AddRepoToInstallation($installation_id, $repository_id);
    }
    function delete($installation_id, $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Apps\RemoveRepoFromInstallation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Apps\RemoveRepoFromInstallation($installation_id, $repository_id);
    }
}
