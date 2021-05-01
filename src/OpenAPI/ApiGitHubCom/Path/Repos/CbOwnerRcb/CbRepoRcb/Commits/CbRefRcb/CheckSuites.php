<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb;

final class CheckSuites
{
    function get($owner, $repo, $ref, $app_id, $check_name, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListSuitesForRefOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListSuitesForRefOperation($owner, $repo, $ref, $app_id, $check_name, $per_page, $page);
    }
}
