<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CreateDiscussion
{
    private const OPERATION_ID = 'teams/create-discussion';
    /**This API is under preview and subject to change.**/
    public string $accept;
    public int $team_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct(string $accept = 'application/vnd.github.echo-preview+json', $team_id)
    {
        $this->accept  = $accept;
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
