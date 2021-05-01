<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\\Repos\CbOwnerRcb\CbRepoRcb\Labels;

final class CbNameRcb
{
    function get($owner, $repo, $name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Issues\GetLabelOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Issues\GetLabelOperation($owner, $repo, $name);
    }
    function delete($owner, $repo, $name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Issues\DeleteLabelOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Issues\DeleteLabelOperation($owner, $repo, $name);
    }
    function patch($owner, $repo, $name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Issues\UpdateLabelOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Issues\UpdateLabelOperation($owner, $repo, $name);
    }
}