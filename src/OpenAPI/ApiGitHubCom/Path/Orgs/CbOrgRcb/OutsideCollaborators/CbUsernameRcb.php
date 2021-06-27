<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\OutsideCollaborators;

final class CbUsernameRcb
{
    function put($org, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ConvertMemberToOutsideCollaborator
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ConvertMemberToOutsideCollaborator($org, $username);
    }
    function delete($org, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveOutsideCollaborator
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveOutsideCollaborator($org, $username);
    }
}
