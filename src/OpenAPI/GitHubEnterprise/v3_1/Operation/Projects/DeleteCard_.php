<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects;

final class DeleteCard_
{
    private const OPERATION_ID = 'projects/delete-card';
    /**The unique identifier of the card.**/
    public int $card_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($card_id)
    {
        $this->card_id = $card_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{card_id}'), array($this->card_id), '/projects/columns/cards/{card_id}?'));
    }
    function validateResponse()
    {
    }
}
