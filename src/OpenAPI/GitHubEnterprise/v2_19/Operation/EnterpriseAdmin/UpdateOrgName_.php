<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin;

final class UpdateOrgName_
{
    private const OPERATION_ID = 'enterprise-admin/update-org-name';
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
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{org}'), array($this->org), '/admin/organizations/{org}?'));
    }
    function validateResponse()
    {
    }
}
