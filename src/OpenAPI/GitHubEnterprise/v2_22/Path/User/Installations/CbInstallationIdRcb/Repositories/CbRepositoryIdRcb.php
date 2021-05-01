<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\\User\Installations\CbInstallationIdRcb\Repositories;

final class CbRepositoryIdRcb
{
    function put($installation_id, $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\AddRepoToInstallationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\AddRepoToInstallationOperation($installation_id, $repository_id);
    }
    function delete($installation_id, $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\RemoveRepoFromInstallationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\RemoveRepoFromInstallationOperation($installation_id, $repository_id);
    }
}