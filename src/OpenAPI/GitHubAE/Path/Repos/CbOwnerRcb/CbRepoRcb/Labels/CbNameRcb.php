<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Labels;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\DeleteLabelOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\GetLabelOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\UpdateLabelOperation;

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

    function patch($owner, $repo, $name): UpdateLabelOperation
    {
        return new UpdateLabelOperation($owner, $repo, $name);
    }
}
