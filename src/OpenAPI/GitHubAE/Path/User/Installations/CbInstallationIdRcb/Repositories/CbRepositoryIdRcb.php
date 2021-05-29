<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User\Installations\CbInstallationIdRcb\Repositories;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\AddRepoToInstallationOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\RemoveRepoFromInstallationOperation;

final class CbRepositoryIdRcb
{
    function put($installation_id, $repository_id): AddRepoToInstallationOperation
    {
        return new AddRepoToInstallationOperation($installation_id, $repository_id);
    }

    function delete($installation_id, $repository_id): RemoveRepoFromInstallationOperation
    {
        return new RemoveRepoFromInstallationOperation($installation_id, $repository_id);
    }
}
