<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User\Installations\CbInstallationIdRcb\Repositories;

final class CbRepositoryIdRcb
{
    function put($installation_id, $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\AddRepoToInstallationForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\AddRepoToInstallationForAuthenticatedUser($installation_id, $repository_id);
    }
    function delete($installation_id, $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\RemoveRepoFromInstallationForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\RemoveRepoFromInstallationForAuthenticatedUser($installation_id, $repository_id);
    }
}
