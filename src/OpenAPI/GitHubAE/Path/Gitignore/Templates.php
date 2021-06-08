<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Gitignore;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gitignore\GetAllTemplates;

final class Templates
{
    function get(): GetAllTemplates
    {
        return new GetAllTemplates();
    }
}
