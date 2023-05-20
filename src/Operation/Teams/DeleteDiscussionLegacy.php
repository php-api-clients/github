<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeleteDiscussionLegacy
{
    public const OPERATION_ID    = 'teams/delete-discussion-legacy';
    public const OPERATION_MATCH = 'DELETE /teams/{team_id}/discussions/{discussion_number}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/teams/{team_id}/discussions/{discussion_number}';
    /**The unique identifier of the team. **/
    private int $teamId;
    /**The number that identifies the discussion. **/
    private int $discussionNumber;

    public function __construct(int $teamId, int $discussionNumber)
    {
        $this->teamId           = $teamId;
        $this->discussionNumber = $discussionNumber;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{team_id}', '{discussion_number}'], [$this->teamId, $this->discussionNumber], self::PATH));
    }

    /**
     * @return array{code: int}
     */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return ['code' => 204];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
