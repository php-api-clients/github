<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects;

final class CreateCard_
{
    private const OPERATION_ID = 'projects/create-card';
    /**The unique identifier of the column.**/
    private readonly int $column_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $column_id)
    {
        $this->column_id = $column_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{column_id}'), array($this->column_id), '/projects/columns/{column_id}/cards'));
    }
    function validateResponse()
    {
    }
}
