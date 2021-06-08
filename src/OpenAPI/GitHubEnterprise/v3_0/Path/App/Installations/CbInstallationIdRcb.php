<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\App\Installations;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\DeleteInstallation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\GetInstallation;

final class CbInstallationIdRcb
{
    function get($installation_id): GetInstallation
    {
        return new GetInstallation($installation_id);
    }

    function delete($installation_id): DeleteInstallation
    {
        return new DeleteInstallation($installation_id);
    }
}
