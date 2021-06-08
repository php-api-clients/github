<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Gitignore;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Gitignore\GetAllTemplates;

final class Templates
{
    function get(): GetAllTemplates
    {
        return new GetAllTemplates();
    }
}
