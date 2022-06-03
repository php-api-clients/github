<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprise\Stats;

final class All
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetAllStats
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetAllStats();
    }
}
