<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Memberships\Orgs;

final class CbOrgRcb
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetMembershipForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetMembershipForAuthenticatedUser($org);
    }
    function patch($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateMembershipForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateMembershipForAuthenticatedUser($org);
    }
}
