<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Path\\Authorizations\Clients;

final class CbClientIdRcb
{
    function put($client_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppOperation($client_id);
    }
}
