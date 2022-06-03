<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Admin;

final class PreReceiveEnvironments
{
    function get(int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created') : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListPreReceiveEnvironments
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListPreReceiveEnvironments($per_page, $page, $direction, $sort);
    }
    function post() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreatePreReceiveEnvironment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreatePreReceiveEnvironment();
    }
}
