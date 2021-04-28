<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb;

final class FailedInvitations
{
    function get($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Orgs\ListFailedInvitationsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Orgs\ListFailedInvitationsOperation($org, $per_page, $page);
    }
}
