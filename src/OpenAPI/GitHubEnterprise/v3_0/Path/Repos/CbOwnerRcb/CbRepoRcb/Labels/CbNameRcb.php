<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Labels;

final class CbNameRcb
{
    function get($owner, $repo, $name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Issues\GetLabel
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Issues\GetLabel($owner, $repo, $name);
    }
    function delete($owner, $repo, $name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Issues\DeleteLabel
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Issues\DeleteLabel($owner, $repo, $name);
    }
    function patch($owner, $repo, $name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Issues\UpdateLabel
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Issues\UpdateLabel($owner, $repo, $name);
    }
}
