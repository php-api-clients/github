<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Memberships;

final class CbUsernameRcb
{
    function get($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\GetMembershipForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\GetMembershipForUser($org, $username);
    }
    function put($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\SetMembershipForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\SetMembershipForUser($org, $username);
    }
    function delete($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\RemoveMembershipForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\RemoveMembershipForUser($org, $username);
    }
}
