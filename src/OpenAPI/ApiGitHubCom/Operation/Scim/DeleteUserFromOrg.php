<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim;

final class DeleteUserFromOrg
{
    private const OPERATION_ID = 'scim/delete-user-from-org';
    /****/
    public string $org;
    /**scim_user_id parameter**/
    public string $scim_user_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $scim_user_id)
    {
        $this->org = $org;
        $this->scim_user_id = $scim_user_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{org}', '{scim_user_id}'), array($this->org, $this->scim_user_id), '/scim/v2/organizations/{org}/Users/{scim_user_id}?'));
    }
    function validateResponse()
    {
    }
}