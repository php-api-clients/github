<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Orgs;

final class UpdateMembershipForAuthenticatedUser_
{
    private const OPERATION_ID = 'orgs/update-membership-for-authenticated-user';
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
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{org}'), array($this->org), '/user/memberships/orgs/{org}'));
    }
    function validateResponse()
    {
    }
}
