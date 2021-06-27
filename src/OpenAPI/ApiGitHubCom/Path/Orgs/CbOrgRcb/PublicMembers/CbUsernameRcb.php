<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\PublicMembers;

final class CbUsernameRcb
{
    function get($org, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CheckPublicMembershipForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CheckPublicMembershipForUser($org, $username);
    }
    function put($org, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\SetPublicMembershipForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\SetPublicMembershipForAuthenticatedUser($org, $username);
    }
    function delete($org, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemovePublicMembershipForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemovePublicMembershipForAuthenticatedUser($org, $username);
    }
}
