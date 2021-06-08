<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Markdown;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Markdown\RenderRaw;

final class Raw
{
    function post(): RenderRaw
    {
        return new RenderRaw();
    }
}
