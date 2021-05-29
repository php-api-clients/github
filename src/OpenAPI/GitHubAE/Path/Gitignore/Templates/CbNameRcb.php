<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Gitignore\Templates;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gitignore\GetTemplateOperation;

final class CbNameRcb
{
    function get($name): GetTemplateOperation
    {
        return new GetTemplateOperation($name);
    }
}
