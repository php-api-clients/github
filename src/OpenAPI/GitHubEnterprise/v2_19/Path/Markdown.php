<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Markdown\RenderOperation;

final class Markdown
{
    function post(): RenderOperation
    {
        return new RenderOperation();
    }
}
