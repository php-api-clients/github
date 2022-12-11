<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs;

final class ListCustomRoles_
{
    private const OPERATION_ID = 'orgs/list-custom-roles';
    /**The unique identifier of the organization.**/
    private readonly string $organization_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $organization_id)
    {
        $this->organization_id = $organization_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{organization_id}'), array($this->organization_id), '/organizations/{organization_id}/custom_roles'));
    }
    function validateResponse()
    {
    }
}
