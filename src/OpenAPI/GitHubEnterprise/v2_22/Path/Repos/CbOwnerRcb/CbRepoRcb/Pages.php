<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\CreatePagesSiteOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\DeletePagesSiteOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\GetPagesOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\UpdateInformationAboutPagesSiteOperation;

final class Pages
{
    function get($owner, $repo): GetPagesOperation
    {
        return new GetPagesOperation($owner, $repo);
    }

    function put($owner, $repo): UpdateInformationAboutPagesSiteOperation
    {
        return new UpdateInformationAboutPagesSiteOperation($owner, $repo);
    }

    function post($owner, $repo): CreatePagesSiteOperation
    {
        return new CreatePagesSiteOperation($owner, $repo);
    }

    function delete($owner, $repo): DeletePagesSiteOperation
    {
        return new DeletePagesSiteOperation($owner, $repo);
    }
}
