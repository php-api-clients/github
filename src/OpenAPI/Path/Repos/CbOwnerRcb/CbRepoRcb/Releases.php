<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb;

final class Releases
{
    function get($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\ListReleasesOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\ListReleasesOperation($owner, $repo, $per_page, $page);
    }
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\CreateReleaseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\CreateReleaseOperation($owner, $repo);
    }
}
