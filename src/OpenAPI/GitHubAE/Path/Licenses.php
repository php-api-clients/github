<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Licenses\GetAllCommonlyUsed;

final class Licenses
{
    function get($featured, int $per_page = 30, int $page = 1): GetAllCommonlyUsed
    {
        return new GetAllCommonlyUsed($featured, $per_page, $page);
    }
}
