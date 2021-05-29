<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Apps;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\GetBySlugOperation;

final class CbAppSlugRcb
{
    function get($app_slug): GetBySlugOperation
    {
        return new GetBySlugOperation($app_slug);
    }
}
