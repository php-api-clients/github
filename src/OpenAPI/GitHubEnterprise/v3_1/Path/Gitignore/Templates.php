<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Gitignore;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gitignore\GetAllTemplatesOperation;

final class Templates
{
    function get(): GetAllTemplatesOperation
    {
        return new GetAllTemplatesOperation();
    }
}
