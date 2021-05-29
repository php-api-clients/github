<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Environments;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateOrUpdateEnvironmentOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteAnEnvironmentOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetEnvironmentOperation;

final class CbEnvironmentNameRcb
{
    function get($owner, $repo, $environment_name): GetEnvironmentOperation
    {
        return new GetEnvironmentOperation($owner, $repo, $environment_name);
    }

    function put($owner, $repo, $environment_name): CreateOrUpdateEnvironmentOperation
    {
        return new CreateOrUpdateEnvironmentOperation($owner, $repo, $environment_name);
    }

    function delete($owner, $repo, $environment_name): DeleteAnEnvironmentOperation
    {
        return new DeleteAnEnvironmentOperation($owner, $repo, $environment_name);
    }
}
