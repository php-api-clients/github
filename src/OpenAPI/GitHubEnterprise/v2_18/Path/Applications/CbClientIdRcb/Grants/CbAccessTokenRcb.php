<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Applications\CbClientIdRcb\Grants;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\OauthAuthorizations\RevokeGrantForApplication;

final class CbAccessTokenRcb
{
    function delete($client_id, $access_token): RevokeGrantForApplication
    {
        return new RevokeGrantForApplication($client_id, $access_token);
    }
}
