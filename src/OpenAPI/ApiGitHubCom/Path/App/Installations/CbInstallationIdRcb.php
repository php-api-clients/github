<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\App\Installations;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\DeleteInstallation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetInstallation;

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
