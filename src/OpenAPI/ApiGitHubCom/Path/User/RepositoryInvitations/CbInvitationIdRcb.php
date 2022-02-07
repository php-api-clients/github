<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\RepositoryInvitations;

final class CbInvitationIdRcb
{
    function delete($invitation_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeclineInvitationForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeclineInvitationForAuthenticatedUser($invitation_id);
    }
    function patch($invitation_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AcceptInvitationForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AcceptInvitationForAuthenticatedUser($invitation_id);
    }
}
