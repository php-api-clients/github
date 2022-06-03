<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Users;

final class CbUsernameRcb
{
    function get($username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetByUsername
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetByUsername($username);
    }
}
