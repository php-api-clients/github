<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Projects;

final class UpdateCard
{
    private const OPERATION_ID = 'projects/update-card';
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
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{card_id}'), array($this->card_id), '/projects/columns/cards/{card_id}?'));
    }
    function validateResponse()
    {
    }
}