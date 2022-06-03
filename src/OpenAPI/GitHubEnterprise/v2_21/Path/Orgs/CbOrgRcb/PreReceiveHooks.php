<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Orgs\CbOrgRcb;

final class PreReceiveHooks
{
    function get($org, int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created') : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\ListPreReceiveHooksForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\ListPreReceiveHooksForOrg($org, $per_page, $page, $direction, $sort);
    }
}
