<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Path;

final class Licenses
{
    function get($featured, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Licenses\GetAllCommonlyUsedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Licenses\GetAllCommonlyUsedOperation($featured, $per_page, $page);
    }
}
