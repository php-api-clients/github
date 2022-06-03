<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Applications\CbClientIdRcb\Tokens;

final class CbAccessTokenRcb
{
    function get($client_id, $access_token) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\CheckAuthorization
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\CheckAuthorization($client_id, $access_token);
    }
    function post($client_id, $access_token) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\ResetAuthorization
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\ResetAuthorization($client_id, $access_token);
    }
    function delete($client_id, $access_token) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\RevokeAuthorizationForApplication
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\RevokeAuthorizationForApplication($client_id, $access_token);
    }
}
