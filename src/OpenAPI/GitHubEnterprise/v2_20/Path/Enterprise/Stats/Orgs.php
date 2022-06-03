<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Enterprise\Stats;

final class Orgs
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetOrgStats
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetOrgStats();
    }
}
