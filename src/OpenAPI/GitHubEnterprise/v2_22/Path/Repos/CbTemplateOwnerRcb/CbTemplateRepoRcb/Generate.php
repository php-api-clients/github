<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbTemplateOwnerRcb\CbTemplateRepoRcb;

final class Generate
{
    function post($template_owner, $template_repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\CreateUsingTemplate
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\CreateUsingTemplate($template_owner, $template_repo);
    }
}
