<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

final class Licenses
{
    function get($featured, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Licenses\GetAllCommonlyUsedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Licenses\GetAllCommonlyUsedOperation($featured, $per_page, $page);
    }
}
