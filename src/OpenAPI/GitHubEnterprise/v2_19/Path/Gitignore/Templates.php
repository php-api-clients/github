<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Gitignore;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Gitignore\GetAllTemplates;

final class Templates
{
    function get(): GetAllTemplates
    {
        return new GetAllTemplates();
    }
}
