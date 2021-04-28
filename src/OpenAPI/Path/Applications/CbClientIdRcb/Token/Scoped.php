<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Applications\CbClientIdRcb\Token;

final class Scoped
{
    function post($client_id) : \ApiClients\Client\Github\OpenAPI\Operation\Apps\ScopeTokenOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\ScopeTokenOperation($client_id);
    }
}
