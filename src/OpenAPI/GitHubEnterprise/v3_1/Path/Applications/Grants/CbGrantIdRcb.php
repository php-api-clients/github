<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Applications\Grants;

final class CbGrantIdRcb
{
    function get($grant_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\GetGrantOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\GetGrantOperation($grant_id);
    }
    function delete($grant_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\DeleteGrantOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\DeleteGrantOperation($grant_id);
    }
}
