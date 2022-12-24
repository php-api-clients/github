<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Milestones
{
    function get($owner, $repo, string $state = 'open', string $sort = 'due_on', string $direction = 'asc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListMilestones
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListMilestones($owner, $repo, $state, $sort, $direction, $per_page, $page);
    }
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\CreateMilestone
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\CreateMilestone($owner, $repo);
    }
}