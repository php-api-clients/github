<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Path\\Users\CbUsernameRcb;

final class Gists
{
    function get($username, $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Gists\ListForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Gists\ListForUserOperation($username, $since, $per_page, $page);
    }
}
