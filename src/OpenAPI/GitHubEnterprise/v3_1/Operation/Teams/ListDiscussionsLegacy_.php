<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams;

final class ListDiscussionsLegacy_
{
    private const OPERATION_ID = 'teams/list-discussions-legacy';
    /**The unique identifier of the team.**/
    private readonly int $team_id;
    /**The direction to sort the results by.**/
    private readonly string $direction;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $team_id, string $direction = 'desc', int $per_page = 30, int $page = 1)
    {
        $this->team_id = $team_id;
        $this->direction = $direction;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{team_id}', '{direction}', '{per_page}', '{page}'), array($this->team_id, $this->direction, $this->per_page, $this->page), '/teams/{team_id}/discussions?direction={direction}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
