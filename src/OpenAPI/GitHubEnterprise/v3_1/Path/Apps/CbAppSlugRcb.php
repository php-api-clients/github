<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Apps;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\GetBySlug;

final class CbAppSlugRcb
{
    function get($app_slug): GetBySlug
    {
        return new GetBySlug($app_slug);
    }
}