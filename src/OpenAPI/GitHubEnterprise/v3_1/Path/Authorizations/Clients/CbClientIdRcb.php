<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Authorizations\Clients;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\GetOrCreateAuthorizationForApp;

final class CbClientIdRcb
{
    function put($client_id): GetOrCreateAuthorizationForApp
    {
        return new GetOrCreateAuthorizationForApp($client_id);
    }
}
