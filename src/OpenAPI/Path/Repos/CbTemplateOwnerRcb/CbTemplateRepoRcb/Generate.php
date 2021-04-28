<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbTemplateOwnerRcb\CbTemplateRepoRcb;

final class Generate
{
    function post($template_owner, $template_repo) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\CreateUsingTemplateOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\CreateUsingTemplateOperation($template_owner, $template_repo);
    }
}
