<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbTemplateOwnerRcb\CbTemplateRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\CreateUsingTemplate;

final class Generate
{
    function post($template_owner, $template_repo): CreateUsingTemplate
    {
        return new CreateUsingTemplate($template_owner, $template_repo);
    }
}
