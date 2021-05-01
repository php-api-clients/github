<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\User\RepositoryInvitations;

final class CbInvitationIdRcb
{
    function delete($invitation_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeclineInvitationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeclineInvitationOperation($invitation_id);
    }
    function patch($invitation_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\AcceptInvitationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\AcceptInvitationOperation($invitation_id);
    }
}
