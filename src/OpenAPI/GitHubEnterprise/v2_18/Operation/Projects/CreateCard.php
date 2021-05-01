<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Projects;

final class CreateCard
{
    private const OPERATION_ID = 'projects/create-card';
    /**column_id parameter**/
    public int $column_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($column_id)
    {
        $this->column_id = $column_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{column_id}'), array($this->column_id), '/projects/columns/{column_id}/cards?'));
    }
    function validateResponse()
    {
    }
}
