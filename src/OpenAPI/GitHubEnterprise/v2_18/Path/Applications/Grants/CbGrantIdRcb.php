<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Applications\Grants;

final class CbGrantIdRcb
{
    function get($grant_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\OauthAuthorizations\GetGrantOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\OauthAuthorizations\GetGrantOperation($grant_id);
    }
    function delete($grant_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\OauthAuthorizations\DeleteGrantOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\OauthAuthorizations\DeleteGrantOperation($grant_id);
    }
}
