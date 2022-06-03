<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb;

final class Reactions
{
    function get($owner, $repo, $release_id, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForRelease
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForRelease($owner, $repo, $release_id, $content, $per_page, $page);
    }
    function post($owner, $repo, $release_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForRelease
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForRelease($owner, $repo, $release_id);
    }
}
