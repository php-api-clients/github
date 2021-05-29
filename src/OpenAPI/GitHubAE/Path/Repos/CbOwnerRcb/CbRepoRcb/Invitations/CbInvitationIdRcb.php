<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Invitations;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteInvitationOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateInvitationOperation;

final class CbInvitationIdRcb
{
    function delete($owner, $repo, $invitation_id): DeleteInvitationOperation
    {
        return new DeleteInvitationOperation($owner, $repo, $invitation_id);
    }

    function patch($owner, $repo, $invitation_id): UpdateInvitationOperation
    {
        return new UpdateInvitationOperation($owner, $repo, $invitation_id);
    }
}
