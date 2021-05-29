<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Applications\CbClientIdRcb\Tokens;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\OauthAuthorizations\CheckAuthorization;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\OauthAuthorizations\ResetAuthorization;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\OauthAuthorizations\RevokeAuthorizationForApplication;

final class CbAccessTokenRcb
{
    function get($client_id, $access_token): CheckAuthorization
    {
        return new CheckAuthorization($client_id, $access_token);
    }

    function post($client_id, $access_token): ResetAuthorization
    {
        return new ResetAuthorization($client_id, $access_token);
    }

    function delete($client_id, $access_token): RevokeAuthorizationForApplication
    {
        return new RevokeAuthorizationForApplication($client_id, $access_token);
    }
}
