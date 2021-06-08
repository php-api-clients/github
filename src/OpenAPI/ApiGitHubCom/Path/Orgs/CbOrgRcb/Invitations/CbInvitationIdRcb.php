<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Invitations;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CancelInvitation;

final class CbInvitationIdRcb
{
    function delete($org, $invitation_id): CancelInvitation
    {
        return new CancelInvitation($org, $invitation_id);
    }
}
