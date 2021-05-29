<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Meta\GetOctocat;

final class Octocat
{
    function get($s): GetOctocat
    {
        return new GetOctocat($s);
    }
}
