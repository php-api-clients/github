<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class Update
{
    private const OPERATION_ID = 'teams/update';
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
        return new Request('patch', str_replace(['{team_id}'], [$this->team_id], '/teams/{team_id}?'));
    }

    function validateResponse(): void
    {
    }
}
