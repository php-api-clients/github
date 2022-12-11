<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation;

final class Licenses
{
    public function getAllCommonlyUsed_(bool $featured, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Licenses\GetAllCommonlyUsed_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Licenses\GetAllCommonlyUsed_($featured, $per_page, $page);
    }
    public function get_(string $license) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Licenses\Get_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Licenses\Get_($license);
    }
    public function getForRepo_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Licenses\GetForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Licenses\GetForRepo_($owner, $repo);
    }
}
