<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Teams\CbTeamIdRcb;

final class Teams
{
    function get($team_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListChildLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListChildLegacy($team_id, $per_page, $page);
    }
}
