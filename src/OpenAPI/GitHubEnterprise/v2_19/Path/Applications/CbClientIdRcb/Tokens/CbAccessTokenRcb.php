<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Applications\CbClientIdRcb\Tokens;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\OauthAuthorizations\CheckAuthorizationOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\OauthAuthorizations\ResetAuthorizationOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\OauthAuthorizations\RevokeAuthorizationForApplicationOperation;

final class CbAccessTokenRcb
{
    function get($client_id, $access_token): CheckAuthorizationOperation
    {
        return new CheckAuthorizationOperation($client_id, $access_token);
    }

    function post($client_id, $access_token): ResetAuthorizationOperation
    {
        return new ResetAuthorizationOperation($client_id, $access_token);
    }

    function delete($client_id, $access_token): RevokeAuthorizationForApplicationOperation
    {
        return new RevokeAuthorizationForApplicationOperation($client_id, $access_token);
    }
}
