<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Licenses\GetAllCommonlyUsedOperation;

final class Licenses
{
    function get($featured, int $per_page = 30, int $page = 1): GetAllCommonlyUsedOperation
    {
        return new GetAllCommonlyUsedOperation($featured, $per_page, $page);
    }
}
