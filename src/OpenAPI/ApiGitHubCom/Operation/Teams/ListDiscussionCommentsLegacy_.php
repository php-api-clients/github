<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams;

final class ListDiscussionCommentsLegacy_
{
    private const OPERATION_ID = 'teams/list-discussion-comments-legacy';
    /**The unique identifier of the team.**/
    private readonly int $team_id;
    /**The number that identifies the discussion.**/
    private readonly int $discussion_number;
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
    function __construct(int $team_id, int $discussion_number, string $direction = 'desc', int $per_page = 30, int $page = 1)
    {
        $this->team_id = $team_id;
        $this->discussion_number = $discussion_number;
        $this->direction = $direction;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{team_id}', '{discussion_number}', '{direction}', '{per_page}', '{page}'), array($this->team_id, $this->discussion_number, $this->direction, $this->per_page, $this->page), '/teams/{team_id}/discussions/{discussion_number}/comments?direction={direction}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
