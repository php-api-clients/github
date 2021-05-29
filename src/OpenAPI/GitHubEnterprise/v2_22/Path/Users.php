<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path;

final class Users
{
    function get($since, int $per_page = 30): [$since, $per_page];
}
}
