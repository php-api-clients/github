<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Gitignore\Templates;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gitignore\GetTemplate;

final class CbNameRcb
{
    function get($name): GetTemplate
    {
        return new GetTemplate($name);
    }
}
