<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Apps;

final class CbAppSlugRcb
{
    function get($app_slug) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetBySlugOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetBySlugOperation($app_slug);
    }
}
