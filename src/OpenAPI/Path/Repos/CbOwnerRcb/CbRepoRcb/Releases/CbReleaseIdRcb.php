<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Releases;

final class CbReleaseIdRcb
{
    function get($owner, $repo, $release_id) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetReleaseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetReleaseOperation($owner, $repo, $release_id);
    }
    function delete($owner, $repo, $release_id) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\DeleteReleaseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\DeleteReleaseOperation($owner, $repo, $release_id);
    }
    function patch($owner, $repo, $release_id) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\UpdateReleaseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\UpdateReleaseOperation($owner, $repo, $release_id);
    }
}
