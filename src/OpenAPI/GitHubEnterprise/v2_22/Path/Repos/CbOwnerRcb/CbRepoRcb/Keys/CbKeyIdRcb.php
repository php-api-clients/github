<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Keys;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\DeleteDeployKeyOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\GetDeployKeyOperation;

final class CbKeyIdRcb
{
    function get($owner, $repo, $key_id): GetDeployKeyOperation
    {
        return new GetDeployKeyOperation($owner, $repo, $key_id);
    }

    function delete($owner, $repo, $key_id): DeleteDeployKeyOperation
    {
        return new DeleteDeployKeyOperation($owner, $repo, $key_id);
    }
}
