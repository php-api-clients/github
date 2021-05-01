<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Path\\User;

final class Teams
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Teams\ListForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Teams\ListForAuthenticatedUserOperation($per_page, $page);
    }
}
