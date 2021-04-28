<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Invitations;

final class CbInvitationIdRcb
{
    function delete($org, $invitation_id) : \ApiClients\Client\Github\OpenAPI\Operation\Orgs\CancelInvitationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Orgs\CancelInvitationOperation($org, $invitation_id);
    }
}
