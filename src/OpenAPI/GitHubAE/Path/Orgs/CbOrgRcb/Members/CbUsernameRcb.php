<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Members;

final class CbUsernameRcb
{
    function get($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\CheckMembershipForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\CheckMembershipForUser($org, $username);
    }
    function delete($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\RemoveMember
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\RemoveMember($org, $username);
    }
}
