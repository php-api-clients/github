<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\User\Starred\CbOwnerRcb;

final class CbRepoRcb
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\CheckRepoIsStarredByAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\CheckRepoIsStarredByAuthenticatedUserOperation($owner, $repo);
    }
    function put($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\StarRepoForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\StarRepoForAuthenticatedUserOperation($owner, $repo);
    }
    function delete($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\UnstarRepoForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\UnstarRepoForAuthenticatedUserOperation($owner, $repo);
    }
}
