<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\App\Installations\CbInstallationIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\SuspendInstallation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\UnsuspendInstallation;

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
