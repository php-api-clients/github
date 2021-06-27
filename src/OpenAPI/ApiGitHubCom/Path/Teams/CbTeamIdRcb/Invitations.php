<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Teams\CbTeamIdRcb;

final class Invitations
{
    function get($team_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListPendingInvitationsLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListPendingInvitationsLegacy($team_id, $per_page, $page);
    }
}
