<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Authorizations\Clients\CbClientIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprint;

final class CbFingerprintRcb
{
    function put($client_id, $fingerprint): GetOrCreateAuthorizationForAppAndFingerprint
    {
        return new GetOrCreateAuthorizationForAppAndFingerprint($client_id, $fingerprint);
    }
}
