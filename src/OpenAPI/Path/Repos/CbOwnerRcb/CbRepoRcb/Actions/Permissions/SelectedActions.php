<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions;

final class SelectedActions
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetAllowedActionsRepositoryOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetAllowedActionsRepositoryOperation($owner, $repo);
    }
    function put($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\SetAllowedActionsRepositoryOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\SetAllowedActionsRepositoryOperation($owner, $repo);
    }
}
