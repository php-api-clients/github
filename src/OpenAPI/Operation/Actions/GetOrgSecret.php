<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Actions;

final class GetOrgSecret
{
    private const OPERATION_ID = 'actions/get-org-secret';
    /****/
    public string $org;
    /**secret_name parameter**/
    public string $secret_name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $secret_name)
    {
        $this->org = $org;
        $this->secret_name = $secret_name;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{secret_name}'), array($this->org, $this->secret_name), '/orgs/{org}/actions/secrets/{secret_name}?'));
    }
    function validateResponse()
    {
    }
}
