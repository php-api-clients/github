<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Applications\CbClientIdRcb\Token;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\ScopeTokenOperation;

final class Scoped
{
    function post($client_id): ScopeTokenOperation
    {
        return new ScopeTokenOperation($client_id);
    }
}
