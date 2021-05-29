<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Markdown\RenderOperation;

final class Markdown
{
    function post(): RenderOperation
    {
        return new RenderOperation();
    }
}
