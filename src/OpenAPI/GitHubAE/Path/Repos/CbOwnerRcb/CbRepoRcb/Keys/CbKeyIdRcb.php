<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Keys;

final class CbKeyIdRcb
{
    function get($owner, $repo, $key_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetDeployKey
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetDeployKey($owner, $repo, $key_id);
    }
    function delete($owner, $repo, $key_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteDeployKey
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteDeployKey($owner, $repo, $key_id);
    }
}
