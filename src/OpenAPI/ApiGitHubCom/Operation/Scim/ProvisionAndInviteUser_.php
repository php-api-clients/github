<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim;

final class ProvisionAndInviteUser_
{
    private const OPERATION_ID = 'scim/provision-and-invite-user';
    /**The organization name. The name is not case sensitive.**/
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
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{org}'), array($this->org), '/scim/v2/organizations/{org}/Users'));
    }
    function validateResponse()
    {
    }
}
