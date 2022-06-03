<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Applications\CbClientIdRcb\Tokens;

final class CbAccessTokenRcb
{
    function get($client_id, $access_token) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\OauthAuthorizations\CheckAuthorization
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\OauthAuthorizations\CheckAuthorization($client_id, $access_token);
    }
    function post($client_id, $access_token) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\OauthAuthorizations\ResetAuthorization
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\OauthAuthorizations\ResetAuthorization($client_id, $access_token);
    }
    function delete($client_id, $access_token) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\OauthAuthorizations\RevokeAuthorizationForApplication
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\OauthAuthorizations\RevokeAuthorizationForApplication($client_id, $access_token);
    }
}
