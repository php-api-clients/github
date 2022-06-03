<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\User;

final class Keys
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\ListPublicSshKeysForAuthenticated
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\ListPublicSshKeysForAuthenticated($per_page, $page);
    }
    function post() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\CreatePublicSshKeyForAuthenticated
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\CreatePublicSshKeyForAuthenticated();
    }
}
