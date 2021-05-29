<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\App\Installations;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\DeleteInstallationOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\GetInstallationOperation;

final class CbInstallationIdRcb
{
    function get($installation_id): GetInstallationOperation
    {
        return new GetInstallationOperation($installation_id);
    }

    function delete($installation_id): DeleteInstallationOperation
    {
        return new DeleteInstallationOperation($installation_id);
    }
}
