<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps;

final class GetOrgInstallation_
{
    private const OPERATION_ID = 'apps/get-org-installation';
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}'), array($this->org), '/orgs/{org}/installation?'));
    }
    function validateResponse()
    {
    }
}
