<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\GetRestrictionsForAuthenticatedUser;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\RemoveRestrictionsForAuthenticatedUser;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\SetRestrictionsForAuthenticatedUser;

final class InteractionLimits
{
    function get(): GetRestrictionsForAuthenticatedUser
    {
        return new GetRestrictionsForAuthenticatedUser();
    }

    function put(): SetRestrictionsForAuthenticatedUser
    {
        return new SetRestrictionsForAuthenticatedUser();
    }

    function delete(): RemoveRestrictionsForAuthenticatedUser
    {
        return new RemoveRestrictionsForAuthenticatedUser();
    }
}
