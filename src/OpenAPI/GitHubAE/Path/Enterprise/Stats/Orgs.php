<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprise\Stats;

final class Orgs
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetOrgStats
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetOrgStats();
    }
}
