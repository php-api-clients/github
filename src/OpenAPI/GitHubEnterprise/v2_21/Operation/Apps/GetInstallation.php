<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps;

final class GetInstallation
{
    private const OPERATION_ID = 'apps/get-installation';
    /**This API is under preview and subject to change.**/
    public string $accept;
    /**installation_id parameter**/
    public int $installation_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $accept = 'application/vnd.github.machine-man-preview+json', $installation_id)
    {
        $this->accept = $accept;
        $this->installation_id = $installation_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{installation_id}'), array($this->installation_id), '/app/installations/{installation_id}?'));
    }
    function validateResponse()
    {
    }
}
