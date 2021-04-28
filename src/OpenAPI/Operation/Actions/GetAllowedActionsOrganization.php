<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Actions;

final class GetAllowedActionsOrganization
{
    private const OPERATION_ID = 'actions/get-allowed-actions-organization';
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}'), array($this->org), '/orgs/{org}/actions/permissions/selected-actions?'));
    }
    function validateResponse()
    {
    }
}
