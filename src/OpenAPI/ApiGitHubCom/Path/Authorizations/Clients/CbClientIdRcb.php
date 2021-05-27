<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Authorizations\Clients;

final class CbClientIdRcb
{
    function put($client_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppOperation($client_id);
    }
}
