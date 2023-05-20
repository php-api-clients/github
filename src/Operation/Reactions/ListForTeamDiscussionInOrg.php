<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Reactions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListForTeamDiscussionInOrg
{
    public const OPERATION_ID    = 'reactions/list-for-team-discussion-in-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The slug of the team name. **/
    private string $teamSlug;
    /**The number that identifies the discussion. **/
    private int $discussionNumber;
    /**Returns a single [reaction type](https://docs.github.com/rest/reference/reactions#reaction-types). Omit this parameter to list all reactions to a team discussion. **/
    private string $content;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(string $org, string $teamSlug, int $discussionNumber, string $content, int $perPage = 30, int $page = 1)
    {
        $this->org              = $org;
        $this->teamSlug         = $teamSlug;
        $this->discussionNumber = $discussionNumber;
        $this->content          = $content;
        $this->perPage          = $perPage;
        $this->page             = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{team_slug}', '{discussion_number}', '{content}', '{per_page}', '{page}'], [$this->org, $this->teamSlug, $this->discussionNumber, $this->content, $this->perPage, $this->page], self::PATH . '?content={content}&per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
