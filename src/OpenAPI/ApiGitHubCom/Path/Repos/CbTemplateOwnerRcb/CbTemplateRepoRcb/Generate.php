<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbTemplateOwnerRcb\CbTemplateRepoRcb;

final class Generate
{
    function post($template_owner, $template_repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateUsingTemplate
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateUsingTemplate($template_owner, $template_repo);
    }
}
