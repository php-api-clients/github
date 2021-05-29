<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListDiscussions
{
    private const OPERATION_ID = 'teams/list-discussions';
    /**This API is under preview and subject to change.**/
    public string $accept;
    public int $team_id;
    /**One of `asc` (ascending) or `desc` (descending).**/
    public string $direction;
    /**Results per page (max 100)**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct(string $accept = 'application/vnd.github.echo-preview+json', $team_id, string $direction = 'desc', int $per_page = 30, int $page = 1)
    {
        $this->accept    = $accept;
        $this->team_id   = $team_id;
        $this->direction = $direction;
        $this->per_page  = $per_page;
        $this->page      = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{team_id}', '{direction}', '{per_page}', '{page}'], [$this->team_id, $this->direction, $this->per_page, $this->page], '/teams/{team_id}/discussions?direction={direction}&per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
