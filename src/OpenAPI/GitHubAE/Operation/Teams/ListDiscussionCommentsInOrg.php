<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListDiscussionCommentsInOrg
{
    private const OPERATION_ID = 'teams/list-discussion-comments-in-org';
    public string $org;
    /**team_slug parameter**/
    public string $team_slug;
    public int $discussion_number;
    /**One of `asc` (ascending) or `desc` (descending).**/
    public string $direction;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $team_slug, $discussion_number, string $direction = 'desc', int $per_page = 30, int $page = 1)
    {
        $this->org               = $org;
        $this->team_slug         = $team_slug;
        $this->discussion_number = $discussion_number;
        $this->direction         = $direction;
        $this->per_page          = $per_page;
        $this->page              = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{org}', '{team_slug}', '{discussion_number}', '{direction}', '{per_page}', '{page}'], [$this->org, $this->team_slug, $this->discussion_number, $this->direction, $this->per_page, $this->page], '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments?direction={direction}&per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
