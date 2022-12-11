<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects;

final class ListCards_
{
    private const OPERATION_ID = 'projects/list-cards';
    /**The unique identifier of the column.**/
    private readonly int $column_id;
    /**Filters the project cards that are returned by the card's state.**/
    private readonly string $archived_state;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $column_id, string $archived_state = 'not_archived', int $per_page = 30, int $page = 1)
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
