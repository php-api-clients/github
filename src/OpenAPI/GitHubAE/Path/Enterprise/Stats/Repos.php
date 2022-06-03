<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprise\Stats;

final class Repos
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetRepoStats
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetRepoStats();
    }
}
