<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbTemplateOwnerRcb\CbTemplateRepoRcb;

final class Generate
{
    function post($template_owner, $template_repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\CreateUsingTemplate
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\CreateUsingTemplate($template_owner, $template_repo);
    }
}
