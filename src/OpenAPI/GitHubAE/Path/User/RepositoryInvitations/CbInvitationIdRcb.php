<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User\RepositoryInvitations;

final class CbInvitationIdRcb
{
    function delete($invitation_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeclineInvitationForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeclineInvitationForAuthenticatedUser($invitation_id);
    }
    function patch($invitation_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\AcceptInvitationForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\AcceptInvitationForAuthenticatedUser($invitation_id);
    }
}
