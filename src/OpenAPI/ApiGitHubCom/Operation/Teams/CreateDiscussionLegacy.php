<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CreateDiscussionLegacy
{
    private const OPERATION_ID = 'teams/create-discussion-legacy';
    public int $team_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($team_id)
    {
        $this->team_id = $team_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('post', str_replace(['{team_id}'], [$this->team_id], '/teams/{team_id}/discussions?'));
    }

    function validateResponse(): void
    {
    }
}
