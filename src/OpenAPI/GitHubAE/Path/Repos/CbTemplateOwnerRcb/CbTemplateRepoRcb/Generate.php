<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbTemplateOwnerRcb\CbTemplateRepoRcb;

final class Generate
{
    function post($template_owner, $template_repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateUsingTemplate
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateUsingTemplate($template_owner, $template_repo);
    }
}
