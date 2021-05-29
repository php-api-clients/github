<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\User\RepositoryInvitations;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\AcceptInvitation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeclineInvitation;

final class CbInvitationIdRcb
{
    function delete($invitation_id): DeclineInvitation
    {
        return new DeclineInvitation($invitation_id);
    }

    function patch($invitation_id): AcceptInvitation
    {
        return new AcceptInvitation($invitation_id);
    }
}