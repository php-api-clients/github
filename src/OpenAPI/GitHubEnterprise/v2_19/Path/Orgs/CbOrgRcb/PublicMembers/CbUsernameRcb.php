<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Orgs\CbOrgRcb\PublicMembers;

final class CbUsernameRcb
{
    function get($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Orgs\CheckPublicMembershipForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Orgs\CheckPublicMembershipForUser($org, $username);
    }
    function put($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Orgs\SetPublicMembershipForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Orgs\SetPublicMembershipForAuthenticatedUser($org, $username);
    }
    function delete($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Orgs\RemovePublicMembershipForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Orgs\RemovePublicMembershipForAuthenticatedUser($org, $username);
    }
}
