<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Meta\GetOctocatOperation;

final class Octocat
{
    function get($s): GetOctocatOperation
    {
        return new GetOctocatOperation($s);
    }
}
