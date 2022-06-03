<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Users\CbUsernameRcb;

final class GpgKeys
{
    function get($username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListGpgKeysForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListGpgKeysForUser($username, $per_page, $page);
    }
}
