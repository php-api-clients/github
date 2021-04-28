<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Interactions;

final class RemoveRestrictionsForOrg
{
    private const OPERATION_ID = 'interactions/remove-restrictions-for-org';
    /****/
    public string $org;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org)
    {
        $this->org = $org;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{org}'), array($this->org), '/orgs/{org}/interaction-limits?'));
    }
    function validateResponse()
    {
    }
}
