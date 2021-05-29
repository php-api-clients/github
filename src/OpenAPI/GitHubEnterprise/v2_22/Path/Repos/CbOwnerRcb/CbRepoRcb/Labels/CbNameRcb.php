<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Labels;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\DeleteLabel;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\GetLabel;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\UpdateLabel;

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

    function patch($owner, $repo, $name): UpdateLabel
    {
        return new UpdateLabel($owner, $repo, $name);
    }
}
