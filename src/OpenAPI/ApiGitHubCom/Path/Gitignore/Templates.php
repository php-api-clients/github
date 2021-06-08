<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Gitignore;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gitignore\GetAllTemplates;

final class Templates
{
    function get(): GetAllTemplates
    {
        return new GetAllTemplates();
    }
}
