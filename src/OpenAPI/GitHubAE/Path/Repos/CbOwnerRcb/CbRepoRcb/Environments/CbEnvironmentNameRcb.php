<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Environments;

final class CbEnvironmentNameRcb
{
    function get($owner, $repo, $environment_name) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetEnvironment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetEnvironment($owner, $repo, $environment_name);
    }
    function put($owner, $repo, $environment_name) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateOrUpdateEnvironment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateOrUpdateEnvironment($owner, $repo, $environment_name);
    }
    function delete($owner, $repo, $environment_name) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteAnEnvironment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteAnEnvironment($owner, $repo, $environment_name);
    }
}