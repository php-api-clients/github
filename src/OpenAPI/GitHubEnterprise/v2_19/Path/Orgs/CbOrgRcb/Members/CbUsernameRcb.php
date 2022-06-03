<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Orgs\CbOrgRcb\Members;

final class CbUsernameRcb
{
    function get($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Orgs\CheckMembershipForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Orgs\CheckMembershipForUser($org, $username);
    }
    function delete($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Orgs\RemoveMember
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Orgs\RemoveMember($org, $username);
    }
}
