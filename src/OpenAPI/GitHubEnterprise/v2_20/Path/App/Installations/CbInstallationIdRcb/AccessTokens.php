<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\App\Installations\CbInstallationIdRcb;

final class AccessTokens
{
    function post(string $accept = 'application/vnd.github.machine-man-preview+json', $installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Apps\CreateInstallationAccessToken
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Apps\CreateInstallationAccessToken($accept, $installation_id);
    }
}
