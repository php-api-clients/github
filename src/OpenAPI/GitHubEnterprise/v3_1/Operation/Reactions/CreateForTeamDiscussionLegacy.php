<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CreateForTeamDiscussionLegacy
{
    private const OPERATION_ID = 'reactions/create-for-team-discussion-legacy';
    public int $team_id;
    public int $discussion_number;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($team_id, $discussion_number)
    {
        $this->team_id           = $team_id;
        $this->discussion_number = $discussion_number;
    }

    function createRequest(): RequestInterface
    {
        return new Request('post', str_replace(['{team_id}', '{discussion_number}'], [$this->team_id, $this->discussion_number], '/teams/{team_id}/discussions/{discussion_number}/reactions?'));
    }

    function validateResponse(): void
    {
    }
}
