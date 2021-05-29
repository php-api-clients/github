<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Gitignore;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gitignore\GetAllTemplatesOperation;

final class Templates
{
    function get(): GetAllTemplatesOperation
    {
        return new GetAllTemplatesOperation();
    }
}
