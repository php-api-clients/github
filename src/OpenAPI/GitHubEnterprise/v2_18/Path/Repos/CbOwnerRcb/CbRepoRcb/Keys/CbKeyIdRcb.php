<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Keys;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\DeleteDeployKey;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\GetDeployKey;

final class CbKeyIdRcb
{
    function get($owner, $repo, $key_id): GetDeployKey
    {
        return new GetDeployKey($owner, $repo, $key_id);
    }

    function delete($owner, $repo, $key_id): DeleteDeployKey
    {
        return new DeleteDeployKey($owner, $repo, $key_id);
    }
}
