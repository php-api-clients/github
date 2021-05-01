<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\\App\Installations\CbInstallationIdRcb;

final class AccessTokens
{
    function post($installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\CreateInstallationAccessTokenOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\CreateInstallationAccessTokenOperation($installation_id);
    }
}