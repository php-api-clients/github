<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\User\Starred\CbOwnerRcb;

final class CbRepoRcb
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Activity\CheckRepoIsStarredByAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Activity\CheckRepoIsStarredByAuthenticatedUserOperation($owner, $repo);
    }
    function put($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Activity\StarRepoForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Activity\StarRepoForAuthenticatedUserOperation($owner, $repo);
    }
    function delete($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Activity\UnstarRepoForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Activity\UnstarRepoForAuthenticatedUserOperation($owner, $repo);
    }
}
