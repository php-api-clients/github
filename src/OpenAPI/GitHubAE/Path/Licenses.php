<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

final class Licenses
{
    function get($featured, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Licenses\GetAllCommonlyUsed
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Licenses\GetAllCommonlyUsed($featured, $per_page, $page);
    }
}
