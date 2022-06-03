<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb;

final class CbRepoRcb
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\Get($owner, $repo);
    }
    function delete($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\Delete
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\Delete($owner, $repo);
    }
    function patch($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\Update
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\Update($owner, $repo);
    }
}
