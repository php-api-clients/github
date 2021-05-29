<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreatePagesSite;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeletePagesSite;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetPages;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateInformationAboutPagesSite;

final class Pages
{
    function get($owner, $repo): GetPages
    {
        return new GetPages($owner, $repo);
    }

    function put($owner, $repo): UpdateInformationAboutPagesSite
    {
        return new UpdateInformationAboutPagesSite($owner, $repo);
    }

    function post($owner, $repo): CreatePagesSite
    {
        return new CreatePagesSite($owner, $repo);
    }

    function delete($owner, $repo): DeletePagesSite
    {
        return new DeletePagesSite($owner, $repo);
    }
}
