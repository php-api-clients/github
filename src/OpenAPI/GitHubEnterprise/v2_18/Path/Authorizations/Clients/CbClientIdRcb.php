<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Authorizations\Clients;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppOperation;

final class CbClientIdRcb
{
    function put($client_id): GetOrCreateAuthorizationForAppOperation
    {
        return new GetOrCreateAuthorizationForAppOperation($client_id);
    }
}
