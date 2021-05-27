<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\User;

final class GpgKeys
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\ListGpgKeysForAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\ListGpgKeysForAuthenticatedOperation($per_page, $page);
    }
    function post() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\CreateGpgKeyForAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\CreateGpgKeyForAuthenticatedOperation();
    }
}
