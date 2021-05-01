<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\\Repos\CbOwnerRcb\CbRepoRcb\Keys;

final class CbKeyIdRcb
{
    function get($owner, $repo, $key_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos\GetDeployKeyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos\GetDeployKeyOperation($owner, $repo, $key_id);
    }
    function delete($owner, $repo, $key_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos\DeleteDeployKeyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos\DeleteDeployKeyOperation($owner, $repo, $key_id);
    }
}
