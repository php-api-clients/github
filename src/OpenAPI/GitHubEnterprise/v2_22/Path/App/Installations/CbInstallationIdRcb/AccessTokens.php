<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\App\Installations\CbInstallationIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\CreateInstallationAccessToken;

final class AccessTokens
{
    function post($installation_id): CreateInstallationAccessToken
    {
        return new CreateInstallationAccessToken($installation_id);
    }
}
