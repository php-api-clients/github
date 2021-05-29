<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Authorizations\Clients\CbClientIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprintOperation;

final class CbFingerprintRcb
{
    function put($client_id, $fingerprint): GetOrCreateAuthorizationForAppAndFingerprintOperation
    {
        return new GetOrCreateAuthorizationForAppAndFingerprintOperation($client_id, $fingerprint);
    }
}
