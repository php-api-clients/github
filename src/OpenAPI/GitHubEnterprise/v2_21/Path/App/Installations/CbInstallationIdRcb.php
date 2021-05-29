<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\App\Installations;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\DeleteInstallationOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\GetInstallationOperation;

final class CbInstallationIdRcb
{
    function get(string $accept = 'application/vnd.github.machine-man-preview+json', $installation_id): GetInstallationOperation
    {
        return new GetInstallationOperation($accept, $installation_id);
    }

    function delete(string $accept = 'application/vnd.github.machine-man-preview+json', $installation_id): DeleteInstallationOperation
    {
        return new DeleteInstallationOperation($accept, $installation_id);
    }
}
