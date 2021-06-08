<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Markdown\Render;

final class Markdown
{
    function post(): Render
    {
        return new Render();
    }
}
