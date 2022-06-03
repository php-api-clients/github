<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Applications\Grants;

final class CbGrantIdRcb
{
    function get($grant_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\OauthAuthorizations\GetGrant
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\OauthAuthorizations\GetGrant($grant_id);
    }
    function delete($grant_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\OauthAuthorizations\DeleteGrant
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\OauthAuthorizations\DeleteGrant($grant_id);
    }
}
