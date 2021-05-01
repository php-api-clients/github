<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\Repos\CbTemplateOwnerRcb\CbTemplateRepoRcb;

final class Generate
{
    function post($template_owner, $template_repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateUsingTemplateOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateUsingTemplateOperation($template_owner, $template_repo);
    }
}
