<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Meta\GetOctocatOperation;

final class Octocat
{
    function get($s): GetOctocatOperation
    {
        return new GetOctocatOperation($s);
    }
}
