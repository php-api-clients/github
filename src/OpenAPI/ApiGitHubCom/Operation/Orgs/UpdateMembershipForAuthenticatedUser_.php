<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs;

final class UpdateMembershipForAuthenticatedUser_
{
    private const OPERATION_ID = 'orgs/update-membership-for-authenticated-user';
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
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{org}'), array($this->org), '/user/memberships/orgs/{org}'));
    }
    function validateResponse()
    {
    }
}
