<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Authorizations\Clients;

final class CbClientIdRcb
{
    function put($client_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\OauthAuthorizations\GetOrCreateAuthorizationForApp
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\OauthAuthorizations\GetOrCreateAuthorizationForApp($client_id);
    }
}
