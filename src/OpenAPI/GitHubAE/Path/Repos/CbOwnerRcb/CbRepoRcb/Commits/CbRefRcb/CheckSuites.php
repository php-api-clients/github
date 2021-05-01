<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb;

final class CheckSuites
{
    function get($owner, $repo, $ref, $app_id, $check_name, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\ListSuitesForRefOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\ListSuitesForRefOperation($owner, $repo, $ref, $app_id, $check_name, $per_page, $page);
    }
}
