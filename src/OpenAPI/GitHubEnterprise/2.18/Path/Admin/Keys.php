<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Path\\Admin;

final class Keys
{
    function get(int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created', $since) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\EnterpriseAdmin\ListPublicKeysOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\EnterpriseAdmin\ListPublicKeysOperation($per_page, $page, $direction, $sort, $since);
    }
}
