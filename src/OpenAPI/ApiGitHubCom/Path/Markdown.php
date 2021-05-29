<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Markdown\RenderOperation;

final class Markdown
{
    function post(): RenderOperation
    {
        return new RenderOperation();
    }
}
