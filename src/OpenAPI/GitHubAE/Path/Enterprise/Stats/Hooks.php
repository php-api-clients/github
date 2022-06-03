<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprise\Stats;

final class Hooks
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetHooksStats
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetHooksStats();
    }
}
