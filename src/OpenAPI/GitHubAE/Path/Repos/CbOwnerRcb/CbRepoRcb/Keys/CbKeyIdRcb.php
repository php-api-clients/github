<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Keys;

final class CbKeyIdRcb
{
    function get($owner, $repo, $key_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetDeployKeyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetDeployKeyOperation($owner, $repo, $key_id);
    }
    function delete($owner, $repo, $key_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteDeployKeyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteDeployKeyOperation($owner, $repo, $key_id);
    }
}
