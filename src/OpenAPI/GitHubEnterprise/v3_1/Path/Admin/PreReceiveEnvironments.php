<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Admin;

final class PreReceiveEnvironments
{
    function get(int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created') : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListPreReceiveEnvironmentsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListPreReceiveEnvironmentsOperation($per_page, $page, $direction, $sort);
    }
    function post() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreatePreReceiveEnvironmentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreatePreReceiveEnvironmentOperation();
    }
}
