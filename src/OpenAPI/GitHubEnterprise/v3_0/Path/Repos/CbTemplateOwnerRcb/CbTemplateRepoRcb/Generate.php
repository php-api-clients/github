<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbTemplateOwnerRcb\CbTemplateRepoRcb;

final class Generate
{
    function post($template_owner, $template_repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\CreateUsingTemplate
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\CreateUsingTemplate($template_owner, $template_repo);
    }
}
