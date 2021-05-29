<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Apps;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetBySlugOperation;

final class CbAppSlugRcb
{
    function get($app_slug): GetBySlugOperation
    {
        return new GetBySlugOperation($app_slug);
    }
}
