<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Meta\GetOctocat;

final class Octocat
{
    function get($s): GetOctocat
    {
        return new GetOctocat($s);
    }
}
