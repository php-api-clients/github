<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Reactions;

final class DeleteLegacy
{
    private const OPERATION_ID = 'reactions/delete-legacy';
    /****/
    public int $reaction_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($reaction_id)
    {
        $this->reaction_id = $reaction_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{reaction_id}'), array($this->reaction_id), '/reactions/{reaction_id}?'));
    }
    function validateResponse()
    {
    }
}
