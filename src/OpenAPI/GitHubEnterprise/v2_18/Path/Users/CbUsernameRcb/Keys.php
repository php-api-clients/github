<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Users\CbUsernameRcb;

final class Keys
{
    function get($username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Users\ListPublicKeysForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Users\ListPublicKeysForUser($username, $per_page, $page);
    }
}
