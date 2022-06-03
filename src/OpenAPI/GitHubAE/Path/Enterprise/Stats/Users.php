<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprise\Stats;

final class Users
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetUserStats
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetUserStats();
    }
}
