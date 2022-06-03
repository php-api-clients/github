<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Invitations;

final class CbInvitationIdRcb
{
    function delete($owner, $repo, $invitation_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteInvitation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteInvitation($owner, $repo, $invitation_id);
    }
    function patch($owner, $repo, $invitation_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateInvitation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateInvitation($owner, $repo, $invitation_id);
    }
}
