<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Teams\CbTeamIdRcb;

final class Invitations
{
    function get($team_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\ListPendingInvitationsLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\ListPendingInvitationsLegacyOperation($team_id, $per_page, $page);
    }
}
