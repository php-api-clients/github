<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Gitignore\Templates;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gitignore\GetTemplate;

final class CbNameRcb
{
    function get($name): GetTemplate
    {
        return new GetTemplate($name);
    }
}