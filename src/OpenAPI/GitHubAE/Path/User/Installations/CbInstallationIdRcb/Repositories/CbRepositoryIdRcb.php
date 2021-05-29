<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User\Installations\CbInstallationIdRcb\Repositories;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\AddRepoToInstallation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\RemoveRepoFromInstallation;

final class CbRepositoryIdRcb
{
    function put($installation_id, $repository_id): AddRepoToInstallation
    {
        return new AddRepoToInstallation($installation_id, $repository_id);
    }

    function delete($installation_id, $repository_id): RemoveRepoFromInstallation
    {
        return new RemoveRepoFromInstallation($installation_id, $repository_id);
    }
}
