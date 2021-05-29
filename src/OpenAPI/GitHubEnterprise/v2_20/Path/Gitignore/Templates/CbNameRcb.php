<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Gitignore\Templates;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Gitignore\GetTemplateOperation;

final class CbNameRcb
{
    function get($name): GetTemplateOperation
    {
        return new GetTemplateOperation($name);
    }
}
