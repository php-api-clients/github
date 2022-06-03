<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Applications\CbClientIdRcb\Grants;

final class CbAccessTokenRcb
{
    function delete($client_id, $access_token) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\OauthAuthorizations\RevokeGrantForApplication
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\OauthAuthorizations\RevokeGrantForApplication($client_id, $access_token);
    }
}
