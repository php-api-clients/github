<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Reactions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListForTeamDiscussionCommentLegacy
{
    public const OPERATION_ID    = 'reactions/list-for-team-discussion-comment-legacy';
    public const OPERATION_MATCH = 'GET /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions';
    private const METHOD         = 'GET';
    private const PATH           = '/teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions';
    /**The unique identifier of the team. **/
    private int $teamId;
    /**The number that identifies the discussion. **/
    private int $discussionNumber;
    /**The number that identifies the comment. **/
    private int $commentNumber;
    /**Returns a single [reaction type](https://docs.github.com/rest/reference/reactions#reaction-types). Omit this parameter to list all reactions to a team discussion comment. **/
    private string $content;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(int $teamId, int $discussionNumber, int $commentNumber, string $content, int $perPage = 30, int $page = 1)
    {
        $this->teamId           = $teamId;
        $this->discussionNumber = $discussionNumber;
        $this->commentNumber    = $commentNumber;
        $this->content          = $content;
        $this->perPage          = $perPage;
        $this->page             = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{team_id}', '{discussion_number}', '{comment_number}', '{content}', '{per_page}', '{page}'], [$this->teamId, $this->discussionNumber, $this->commentNumber, $this->content, $this->perPage, $this->page], self::PATH . '?content={content}&per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
