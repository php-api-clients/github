<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects;

final class ListCards
{
    private const OPERATION_ID = 'projects/list-cards';
    /**column_id parameter**/
    public int $column_id;
    /**Filters the project cards that are returned by the card's state. Can be one of `all`,`archived`, or `not_archived`.**/
    public string $archived_state;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($column_id, string $archived_state = 'not_archived', int $per_page = 30, int $page = 1)
    {
        $this->column_id = $column_id;
        $this->archived_state = $archived_state;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{column_id}', '{archived_state}', '{per_page}', '{page}'), array($this->column_id, $this->archived_state, $this->per_page, $this->page), '/projects/columns/{column_id}/cards?archived_state={archived_state}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}