<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\RepositoryInvitations;

final class CbInvitationIdRcb
{
    function delete($invitation_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeclineInvitation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeclineInvitation($invitation_id);
    }
    function patch($invitation_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AcceptInvitation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AcceptInvitation($invitation_id);
    }
}
