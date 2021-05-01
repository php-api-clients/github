<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\\Users;

final class CbUsernameRcb
{
    function get($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\GetByUsernameOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\GetByUsernameOperation($username);
    }
}