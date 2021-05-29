<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\GetRestrictionsForAuthenticatedUserOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\RemoveRestrictionsForAuthenticatedUserOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\SetRestrictionsForAuthenticatedUserOperation;

final class InteractionLimits
{
    function get(): GetRestrictionsForAuthenticatedUserOperation
    {
        return new GetRestrictionsForAuthenticatedUserOperation();
    }

    function put(): SetRestrictionsForAuthenticatedUserOperation
    {
        return new SetRestrictionsForAuthenticatedUserOperation();
    }

    function delete(): RemoveRestrictionsForAuthenticatedUserOperation
    {
        return new RemoveRestrictionsForAuthenticatedUserOperation();
    }
}
