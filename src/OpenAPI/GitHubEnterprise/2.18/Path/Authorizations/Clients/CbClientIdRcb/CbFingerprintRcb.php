<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Path\\Authorizations\Clients\CbClientIdRcb;

final class CbFingerprintRcb
{
    function put($client_id, $fingerprint) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprintOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprintOperation($client_id, $fingerprint);
    }
}
