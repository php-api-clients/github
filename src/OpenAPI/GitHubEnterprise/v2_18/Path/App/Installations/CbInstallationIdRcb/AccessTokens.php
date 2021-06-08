<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\App\Installations\CbInstallationIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Apps\CreateInstallationAccessToken;

final class AccessTokens
{
    function post(string $accept = 'application/vnd.github.machine-man-preview+json', $installation_id): CreateInstallationAccessToken
    {
        return new CreateInstallationAccessToken($accept, $installation_id);
    }
}
