<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions;

final class CreateRemoveTokenForOrg_
{
    private const OPERATION_ID = 'actions/create-remove-token-for-org';
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
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{org}'), array($this->org), '/orgs/{org}/actions/runners/remove-token?'));
    }
    function validateResponse()
    {
    }
}
