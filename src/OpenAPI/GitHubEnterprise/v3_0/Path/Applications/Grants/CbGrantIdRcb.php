<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Applications\Grants;

final class CbGrantIdRcb
{
    function get($grant_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\OauthAuthorizations\GetGrant
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\OauthAuthorizations\GetGrant($grant_id);
    }
    function delete($grant_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\OauthAuthorizations\DeleteGrant
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\OauthAuthorizations\DeleteGrant($grant_id);
    }
}
