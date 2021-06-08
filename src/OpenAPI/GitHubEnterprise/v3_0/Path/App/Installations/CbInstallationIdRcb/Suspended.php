<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\App\Installations\CbInstallationIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\SuspendInstallation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\UnsuspendInstallation;

final class Suspended
{
    function put($installation_id): SuspendInstallation
    {
        return new SuspendInstallation($installation_id);
    }

    function delete($installation_id): UnsuspendInstallation
    {
        return new UnsuspendInstallation($installation_id);
    }
}
