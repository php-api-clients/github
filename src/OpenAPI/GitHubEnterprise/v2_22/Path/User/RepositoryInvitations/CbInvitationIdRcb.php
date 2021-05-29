<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\User\RepositoryInvitations;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\AcceptInvitationOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\DeclineInvitationOperation;

final class CbInvitationIdRcb
{
    function delete($invitation_id): DeclineInvitationOperation
    {
        return new DeclineInvitationOperation($invitation_id);
    }

    function patch($invitation_id): AcceptInvitationOperation
    {
        return new AcceptInvitationOperation($invitation_id);
    }
}
