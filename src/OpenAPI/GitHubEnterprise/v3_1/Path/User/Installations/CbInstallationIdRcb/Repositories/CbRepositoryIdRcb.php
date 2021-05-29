<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\User\Installations\CbInstallationIdRcb\Repositories;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\AddRepoToInstallation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\RemoveRepoFromInstallation;

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
