<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Apps;

final class CbAppSlugRcb
{
    function get($app_slug) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetBySlug
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetBySlug($app_slug);
    }
}
