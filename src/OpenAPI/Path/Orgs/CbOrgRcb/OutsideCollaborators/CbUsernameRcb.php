<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\OutsideCollaborators;

final class CbUsernameRcb
{
    function put($org, $username) : \ApiClients\Client\Github\OpenAPI\Operation\Orgs\ConvertMemberToOutsideCollaboratorOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Orgs\ConvertMemberToOutsideCollaboratorOperation($org, $username);
    }
    function delete($org, $username) : \ApiClients\Client\Github\OpenAPI\Operation\Orgs\RemoveOutsideCollaboratorOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Orgs\RemoveOutsideCollaboratorOperation($org, $username);
    }
}
