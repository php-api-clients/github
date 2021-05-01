<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Path\\Admin;

final class PreReceiveHooks
{
    function get(int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created') : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\EnterpriseAdmin\ListPreReceiveHooksOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\EnterpriseAdmin\ListPreReceiveHooksOperation($per_page, $page, $direction, $sort);
    }
    function post() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\EnterpriseAdmin\CreatePreReceiveHookOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\EnterpriseAdmin\CreatePreReceiveHookOperation();
    }
}
