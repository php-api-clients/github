<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Applications\CbClientIdRcb\Token;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\ScopeToken;

final class Scoped
{
    function post($client_id): ScopeToken
    {
        return new ScopeToken($client_id);
    }
}
