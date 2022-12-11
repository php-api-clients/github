<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps;

final class GetInstallation_
{
    private const OPERATION_ID = 'apps/get-installation';
    /**The unique identifier of the installation.**/
    private readonly int $installation_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $installation_id)
    {
        $this->installation_id = $installation_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{installation_id}'), array($this->installation_id), '/app/installations/{installation_id}'));
    }
    function validateResponse()
    {
    }
}
