<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListChild
{
    private const OPERATION_ID = 'teams/list-child';
    public int $team_id;
    /**Results per page (max 100)**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($team_id, int $per_page = 30, int $page = 1)
    {
        $this->team_id  = $team_id;
        $this->per_page = $per_page;
        $this->page     = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{team_id}', '{per_page}', '{page}'], [$this->team_id, $this->per_page, $this->page], '/teams/{team_id}/teams?per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
