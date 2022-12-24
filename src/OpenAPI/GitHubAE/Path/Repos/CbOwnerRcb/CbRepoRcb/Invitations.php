<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Invitations
{
    function get($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListInvitations
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListInvitations($owner, $repo, $per_page, $page);
    }
}