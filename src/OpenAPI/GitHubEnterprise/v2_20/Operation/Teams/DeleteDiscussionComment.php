<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteDiscussionComment
{
    private const OPERATION_ID = 'teams/delete-discussion-comment';
    public int $team_id;
    public int $discussion_number;
    public int $comment_number;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($team_id, $discussion_number, $comment_number)
    {
        $this->team_id           = $team_id;
        $this->discussion_number = $discussion_number;
        $this->comment_number    = $comment_number;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{team_id}', '{discussion_number}', '{comment_number}'], [$this->team_id, $this->discussion_number, $this->comment_number], '/teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}?'));
    }

    function validateResponse(): void
    {
    }
}
