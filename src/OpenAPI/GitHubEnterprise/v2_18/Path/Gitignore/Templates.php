<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Gitignore;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Gitignore\GetAllTemplatesOperation;

final class Templates
{
    function get(): GetAllTemplatesOperation
    {
        return new GetAllTemplatesOperation();
    }
}
