<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Orgs\CbOrgRcb\Memberships;

final class CbUsernameRcb
{
    function get($org, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetMembershipForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetMembershipForUserOperation($org, $username);
    }
    function put($org, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\SetMembershipForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\SetMembershipForUserOperation($org, $username);
    }
    function delete($org, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveMembershipForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveMembershipForUserOperation($org, $username);
    }
}
