<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User\Starred\CbOwnerRcb;

final class CbRepoRcb
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\CheckRepoIsStarredByAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\CheckRepoIsStarredByAuthenticatedUser($owner, $repo);
    }
    function put($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\StarRepoForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\StarRepoForAuthenticatedUser($owner, $repo);
    }
    function delete($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\UnstarRepoForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\UnstarRepoForAuthenticatedUser($owner, $repo);
    }
}
