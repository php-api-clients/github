<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams;

final class ListPendingInvitationsLegacy_
{
    private const OPERATION_ID = 'teams/list-pending-invitations-legacy';
    /**The unique identifier of the team.**/
    public int $team_id;
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($team_id, int $per_page = 30, int $page = 1)
    {
        $this->team_id = $team_id;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{team_id}', '{per_page}', '{page}'), array($this->team_id, $this->per_page, $this->page), '/teams/{team_id}/invitations?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
