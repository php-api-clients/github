<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Apps;

final class CbAppSlugRcb
{
    function get($app_slug) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetBySlug
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetBySlug($app_slug);
    }
}
