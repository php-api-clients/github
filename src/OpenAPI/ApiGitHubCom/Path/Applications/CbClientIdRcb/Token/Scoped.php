<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Applications\CbClientIdRcb\Token;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ScopeTokenOperation;

final class Scoped
{
    function post($client_id): ScopeTokenOperation
    {
        return new ScopeTokenOperation($client_id);
    }
}
