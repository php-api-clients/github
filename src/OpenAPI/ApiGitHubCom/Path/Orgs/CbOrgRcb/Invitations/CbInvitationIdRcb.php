<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Invitations;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CancelInvitationOperation;

final class CbInvitationIdRcb
{
    function delete($org, $invitation_id): CancelInvitationOperation
    {
        return new CancelInvitationOperation($org, $invitation_id);
    }
}
