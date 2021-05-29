<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbTemplateOwnerRcb\CbTemplateRepoRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateUsingTemplateOperation;

final class Generate
{
    function post($template_owner, $template_repo): CreateUsingTemplateOperation
    {
        return new CreateUsingTemplateOperation($template_owner, $template_repo);
    }
}
