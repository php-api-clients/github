<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

final class Organizations
{
    function get($since, int $per_page = 30): [$since, $per_page];
}
}
