<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Environments;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateOrUpdateEnvironment;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteAnEnvironment;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetEnvironment;

final class CbEnvironmentNameRcb
{
    function get($owner, $repo, $environment_name): GetEnvironment
    {
        return new GetEnvironment($owner, $repo, $environment_name);
    }

    function put($owner, $repo, $environment_name): CreateOrUpdateEnvironment
    {
        return new CreateOrUpdateEnvironment($owner, $repo, $environment_name);
    }

    function delete($owner, $repo, $environment_name): DeleteAnEnvironment
    {
        return new DeleteAnEnvironment($owner, $repo, $environment_name);
    }
}
