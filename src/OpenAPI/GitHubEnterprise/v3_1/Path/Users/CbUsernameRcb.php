<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Users;

final class CbUsernameRcb
{
    function get($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\GetByUsername
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\GetByUsername($username);
    }
}
