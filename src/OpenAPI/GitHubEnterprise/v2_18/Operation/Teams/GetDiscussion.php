<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetDiscussion
{
    private const OPERATION_ID = 'teams/get-discussion';
    /**This API is under preview and subject to change.**/
    public string $accept;
    public int $team_id;
    public int $discussion_number;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number)
    {
        $this->accept            = $accept;
        $this->team_id           = $team_id;
        $this->discussion_number = $discussion_number;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{team_id}', '{discussion_number}'], [$this->team_id, $this->discussion_number], '/teams/{team_id}/discussions/{discussion_number}?'));
    }

    function validateResponse(): void
    {
    }
}
