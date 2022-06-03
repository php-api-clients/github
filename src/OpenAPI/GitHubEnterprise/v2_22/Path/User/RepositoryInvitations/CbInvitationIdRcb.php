<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\User\RepositoryInvitations;

final class CbInvitationIdRcb
{
    function delete($invitation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\DeclineInvitationForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\DeclineInvitationForAuthenticatedUser($invitation_id);
    }
    function patch($invitation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\AcceptInvitationForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\AcceptInvitationForAuthenticatedUser($invitation_id);
    }
}
