<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation;

final class Licenses
{
    public function getAllCommonlyUsed_($featured, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Licenses\GetAllCommonlyUsed_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Licenses\GetAllCommonlyUsed_($featured, $per_page, $page);
    }
    public function get_($license) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Licenses\Get_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Licenses\Get_($license);
    }
    public function getForRepo_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Licenses\GetForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Licenses\GetForRepo_($owner, $repo);
    }
}
