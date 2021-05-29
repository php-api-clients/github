<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Labels;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Issues\DeleteLabelOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Issues\GetLabelOperation;

final class CbNameRcb
{
    function get($owner, $repo, $name): GetLabelOperation
    {
        return new GetLabelOperation($owner, $repo, $name);
    }

    function delete($owner, $repo, $name): DeleteLabelOperation
    {
        return new DeleteLabelOperation($owner, $repo, $name);
    }
}
