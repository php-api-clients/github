<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Authorizations\Clients;

final class CbClientIdRcb
{
    function put($client_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\OauthAuthorizations\GetOrCreateAuthorizationForApp
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\OauthAuthorizations\GetOrCreateAuthorizationForApp($client_id);
    }
}
