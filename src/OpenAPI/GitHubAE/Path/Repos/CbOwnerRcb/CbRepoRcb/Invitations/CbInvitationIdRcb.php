<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Invitations;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteInvitation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateInvitation;

final class CbInvitationIdRcb
{
    function delete($owner, $repo, $invitation_id): DeleteInvitation
    {
        return new DeleteInvitation($owner, $repo, $invitation_id);
    }

    function patch($owner, $repo, $invitation_id): UpdateInvitation
    {
        return new UpdateInvitation($owner, $repo, $invitation_id);
    }
}
