<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists\Create;

final class Gists
{
    function get($since, int $per_page = 30, int $page = 1): [$since, $per_page, $page];
}

function post(): Create
{
    return new Create();
}
}
