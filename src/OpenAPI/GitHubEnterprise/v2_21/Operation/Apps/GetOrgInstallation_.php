<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps;

final class GetOrgInstallation_
{
    private const OPERATION_ID = 'apps/get-org-installation';
    /**This API is under preview and subject to change.**/
    public string $accept;
    /****/
    public string $org;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $accept = 'application/vnd.github.machine-man-preview+json', $org)
    {
        $this->accept = $accept;
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
