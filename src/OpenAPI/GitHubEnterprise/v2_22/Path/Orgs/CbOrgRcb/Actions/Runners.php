<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\\Orgs\CbOrgRcb\Actions;

final class Runners
{
    function get($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\ListSelfHostedRunnersForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\ListSelfHostedRunnersForOrgOperation($org, $per_page, $page);
    }
}