<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Markdown;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Markdown\RenderRaw;

final class Raw
{
    function post(): RenderRaw
    {
        return new RenderRaw();
    }
}
