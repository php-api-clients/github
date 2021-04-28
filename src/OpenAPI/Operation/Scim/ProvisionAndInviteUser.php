<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Scim;

final class ProvisionAndInviteUser
{
    private const OPERATION_ID = 'scim/provision-and-invite-user';
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
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{org}'), array($this->org), '/scim/v2/organizations/{org}/Users?'));
    }
    function validateResponse()
    {
    }
}
