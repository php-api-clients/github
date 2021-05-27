<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\RepositoryInvitations;

final class CbInvitationIdRcb
{
    function delete($invitation_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeclineInvitationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeclineInvitationOperation($invitation_id);
    }
    function patch($invitation_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AcceptInvitationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AcceptInvitationOperation($invitation_id);
    }
}
