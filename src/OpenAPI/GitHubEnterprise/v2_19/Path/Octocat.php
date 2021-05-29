<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Meta\GetOctocatOperation;

final class Octocat
{
    function get($s): GetOctocatOperation
    {
        return new GetOctocatOperation($s);
    }
}
