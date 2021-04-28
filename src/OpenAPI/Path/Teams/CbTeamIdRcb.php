<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Teams;

final class CbTeamIdRcb
{
    function get($team_id) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\GetLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\GetLegacyOperation($team_id);
    }
    function delete($team_id) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\DeleteLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\DeleteLegacyOperation($team_id);
    }
    function patch($team_id) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\UpdateLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\UpdateLegacyOperation($team_id);
    }
}
