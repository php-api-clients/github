<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb;

final class Invitations
{
    function get($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Orgs\ListPendingInvitationsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Orgs\ListPendingInvitationsOperation($org, $per_page, $page);
    }
    function post($org) : \ApiClients\Client\Github\OpenAPI\Operation\Orgs\CreateInvitationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Orgs\CreateInvitationOperation($org);
    }
}
