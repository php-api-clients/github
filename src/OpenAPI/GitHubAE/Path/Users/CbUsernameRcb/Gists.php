<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Users\CbUsernameRcb;

final class Gists
{
    function get($username, $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListForUser($username, $since, $per_page, $page);
    }
}
