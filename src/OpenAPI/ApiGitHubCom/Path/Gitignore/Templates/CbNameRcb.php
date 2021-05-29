<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Gitignore\Templates;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gitignore\GetTemplateOperation;

final class CbNameRcb
{
    function get($name): GetTemplateOperation
    {
        return new GetTemplateOperation($name);
    }
}
