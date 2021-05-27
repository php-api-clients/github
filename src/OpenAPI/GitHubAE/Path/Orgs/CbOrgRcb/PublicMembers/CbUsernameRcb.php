<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\PublicMembers;

final class CbUsernameRcb
{
    function get($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\CheckPublicMembershipForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\CheckPublicMembershipForUserOperation($org, $username);
    }
    function put($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\SetPublicMembershipForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\SetPublicMembershipForAuthenticatedUserOperation($org, $username);
    }
    function delete($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\RemovePublicMembershipForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\RemovePublicMembershipForAuthenticatedUserOperation($org, $username);
    }
}
