<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Authorizations\Clients;

final class CbClientIdRcb
{
    function put($client_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations\GetOrCreateAuthorizationForApp
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations\GetOrCreateAuthorizationForApp($client_id);
    }
}
