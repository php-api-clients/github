<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb;

final class CheckRuns
{
    function get($owner, $repo, $ref, $check_name, $status, string $filter = 'latest', int $per_page = 30, int $page = 1, $app_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\ListForRefOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\ListForRefOperation($owner, $repo, $ref, $check_name, $status, $filter, $per_page, $page, $app_id);
    }
}