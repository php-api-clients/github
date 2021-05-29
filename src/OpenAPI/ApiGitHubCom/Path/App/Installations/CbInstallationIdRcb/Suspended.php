<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\App\Installations\CbInstallationIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\SuspendInstallationOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\UnsuspendInstallationOperation;

final class Suspended
{
    function put($installation_id): SuspendInstallationOperation
    {
        return new SuspendInstallationOperation($installation_id);
    }

    function delete($installation_id): UnsuspendInstallationOperation
    {
        return new UnsuspendInstallationOperation($installation_id);
    }
}
