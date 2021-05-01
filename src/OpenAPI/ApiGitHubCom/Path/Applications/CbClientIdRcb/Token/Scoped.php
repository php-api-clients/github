<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Applications\CbClientIdRcb\Token;

final class Scoped
{
    function post($client_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ScopeTokenOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ScopeTokenOperation($client_id);
    }
}
