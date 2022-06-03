<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Orgs\CbOrgRcb\OutsideCollaborators;

final class CbUsernameRcb
{
    function put($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Orgs\ConvertMemberToOutsideCollaborator
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Orgs\ConvertMemberToOutsideCollaborator($org, $username);
    }
    function delete($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Orgs\RemoveOutsideCollaborator
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Orgs\RemoveOutsideCollaborator($org, $username);
    }
}
