<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\Admin;

final class Keys
{
    function get(int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created', $since) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListPublicKeysOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListPublicKeysOperation($per_page, $page, $direction, $sort, $since);
    }
}
