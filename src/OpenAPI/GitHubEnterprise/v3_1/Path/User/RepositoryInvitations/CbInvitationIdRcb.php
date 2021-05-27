<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\User\RepositoryInvitations;

final class CbInvitationIdRcb
{
    function delete($invitation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeclineInvitationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeclineInvitationOperation($invitation_id);
    }
    function patch($invitation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\AcceptInvitationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\AcceptInvitationOperation($invitation_id);
    }
}
