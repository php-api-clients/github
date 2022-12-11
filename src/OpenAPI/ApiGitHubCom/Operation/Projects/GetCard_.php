<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects;

final class GetCard_
{
    private const OPERATION_ID = 'projects/get-card';
    /**The unique identifier of the card.**/
    private readonly int $card_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $card_id)
    {
        $this->card_id = $card_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{card_id}'), array($this->card_id), '/projects/columns/cards/{card_id}'));
    }
    function validateResponse()
    {
    }
}
