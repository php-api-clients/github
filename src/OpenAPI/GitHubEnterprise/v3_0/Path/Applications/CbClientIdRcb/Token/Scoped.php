<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Applications\CbClientIdRcb\Token;

final class Scoped
{
    function post($client_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\ScopeToken
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\ScopeToken($client_id);
    }
}
