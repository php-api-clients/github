<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Users\CbUsernameRcb;

final class Projects
{
    function get($username, string $state = 'open', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\ListForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\ListForUserOperation($username, $state, $per_page, $page);
    }
}
