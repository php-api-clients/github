<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Labels;

final class CbNameRcb
{
    function get($owner, $repo, $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetLabel
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetLabel($owner, $repo, $name);
    }
    function delete($owner, $repo, $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\DeleteLabel
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\DeleteLabel($owner, $repo, $name);
    }
    function patch($owner, $repo, $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\UpdateLabel
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\UpdateLabel($owner, $repo, $name);
    }
}
