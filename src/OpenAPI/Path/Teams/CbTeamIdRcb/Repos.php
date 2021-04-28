<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Teams\CbTeamIdRcb;

final class Repos
{
    function get($team_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\ListReposLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\ListReposLegacyOperation($team_id, $per_page, $page);
    }
}
