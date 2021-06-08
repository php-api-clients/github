<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Labels;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Issues\DeleteLabel;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Issues\GetLabel;

final class CbNameRcb
{
    function get($owner, $repo, $name): GetLabel
    {
        return new GetLabel($owner, $repo, $name);
    }

    function delete($owner, $repo, $name): DeleteLabel
    {
        return new DeleteLabel($owner, $repo, $name);
    }
}
