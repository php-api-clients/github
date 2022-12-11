<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs;

final class UpdateCustomRole_
{
    private const OPERATION_ID = 'orgs/update-custom-role';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**The unique identifier of the role.**/
    private readonly int $role_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org, int $role_id)
    {
        $this->org = $org;
        $this->role_id = $role_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{org}', '{role_id}'), array($this->org, $this->role_id), '/orgs/{org}/custom_roles/{role_id}'));
    }
    function validateResponse()
    {
    }
}
