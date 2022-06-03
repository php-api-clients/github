<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Pages
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetPages
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetPages($owner, $repo);
    }
    function put($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateInformationAboutPagesSite
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateInformationAboutPagesSite($owner, $repo);
    }
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreatePagesSite
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreatePagesSite($owner, $repo);
    }
    function delete($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeletePagesSite
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeletePagesSite($owner, $repo);
    }
}
