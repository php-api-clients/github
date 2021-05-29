<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\App\Installations\CbInstallationIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\CreateInstallationAccessTokenOperation;

final class AccessTokens
{
    function post($installation_id): CreateInstallationAccessTokenOperation
    {
        return new CreateInstallationAccessTokenOperation($installation_id);
    }
}
