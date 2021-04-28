<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Labels;

final class CbNameRcb
{
    function get($owner, $repo, $name) : \ApiClients\Client\Github\OpenAPI\Operation\Issues\GetLabelOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Issues\GetLabelOperation($owner, $repo, $name);
    }
    function delete($owner, $repo, $name) : \ApiClients\Client\Github\OpenAPI\Operation\Issues\DeleteLabelOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Issues\DeleteLabelOperation($owner, $repo, $name);
    }
    function patch($owner, $repo, $name) : \ApiClients\Client\Github\OpenAPI\Operation\Issues\UpdateLabelOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Issues\UpdateLabelOperation($owner, $repo, $name);
    }
}
