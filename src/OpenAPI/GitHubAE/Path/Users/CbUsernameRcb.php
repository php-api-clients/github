<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Users;

final class CbUsernameRcb
{
    function get($username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetByUsernameOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetByUsernameOperation($username);
    }
}
