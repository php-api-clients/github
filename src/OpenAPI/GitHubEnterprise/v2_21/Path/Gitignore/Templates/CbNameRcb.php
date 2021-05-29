<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Gitignore\Templates;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Gitignore\GetTemplate;

final class CbNameRcb
{
    function get($name): GetTemplate
    {
        return new GetTemplate($name);
    }
}
