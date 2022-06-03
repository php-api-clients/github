<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\User\Memberships\Orgs;

final class CbOrgRcb
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Orgs\GetMembershipForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Orgs\GetMembershipForAuthenticatedUser($org);
    }
    function patch($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Orgs\UpdateMembershipForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Orgs\UpdateMembershipForAuthenticatedUser($org);
    }
}
