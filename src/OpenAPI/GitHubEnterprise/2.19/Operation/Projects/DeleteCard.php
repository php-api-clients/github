<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Projects;

final class DeleteCard
{
    private const OPERATION_ID = 'projects/delete-card';
    /**card_id parameter**/
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
