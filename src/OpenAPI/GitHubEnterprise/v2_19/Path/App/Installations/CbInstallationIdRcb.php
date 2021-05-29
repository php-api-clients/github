<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\App\Installations;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Apps\DeleteInstallation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Apps\GetInstallation;

final class CbInstallationIdRcb
{
    function get(string $accept = 'application/vnd.github.machine-man-preview+json', $installation_id): GetInstallation
    {
        return new GetInstallation($accept, $installation_id);
    }

    function delete(string $accept = 'application/vnd.github.gambit-preview+json,application/vnd.github.machine-man-preview+json', $installation_id): DeleteInstallation
    {
        return new DeleteInstallation($accept, $installation_id);
    }
}
