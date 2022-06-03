<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Labels;

final class CbNameRcb
{
    function get($owner, $repo, $name) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\GetLabel
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\GetLabel($owner, $repo, $name);
    }
    function delete($owner, $repo, $name) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\DeleteLabel
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\DeleteLabel($owner, $repo, $name);
    }
    function patch($owner, $repo, $name) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\UpdateLabel
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\UpdateLabel($owner, $repo, $name);
    }
}
