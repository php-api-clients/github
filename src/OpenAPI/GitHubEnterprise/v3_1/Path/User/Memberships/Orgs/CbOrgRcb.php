<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\User\Memberships\Orgs;

final class CbOrgRcb
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\GetMembershipForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\GetMembershipForAuthenticatedUser($org);
    }
    function patch($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\UpdateMembershipForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\UpdateMembershipForAuthenticatedUser($org);
    }
}
