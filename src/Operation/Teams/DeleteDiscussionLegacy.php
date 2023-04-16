<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteDiscussionLegacy
{
    public const OPERATION_ID    = 'teams/delete-discussion-legacy';
    public const OPERATION_MATCH = 'DELETE /teams/{team_id}/discussions/{discussion_number}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/teams/{team_id}/discussions/{discussion_number}';
    /**The unique identifier of the team.**/
    private int $teamId;
    /**The number that identifies the discussion.**/
    private int $discussionNumber;

    public function __construct(int $teamId, int $discussionNumber)
    {
        $this->teamId           = $teamId;
        $this->discussionNumber = $discussionNumber;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{team_id}', '{discussion_number}'], [$this->teamId, $this->discussionNumber], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
