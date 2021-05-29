<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Gitignore;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Gitignore\GetAllTemplatesOperation;

final class Templates
{
    function get(): GetAllTemplatesOperation
    {
        return new GetAllTemplatesOperation();
    }
}
