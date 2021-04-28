<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Invitations;

final class CbInvitationIdRcb
{
    function delete($owner, $repo, $invitation_id) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\DeleteInvitationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\DeleteInvitationOperation($owner, $repo, $invitation_id);
    }
    function patch($owner, $repo, $invitation_id) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\UpdateInvitationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\UpdateInvitationOperation($owner, $repo, $invitation_id);
    }
}
