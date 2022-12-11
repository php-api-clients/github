<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps;

final class SuspendInstallation_
{
    private const OPERATION_ID = 'apps/suspend-installation';
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
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{installation_id}'), array($this->installation_id), '/app/installations/{installation_id}/suspended'));
    }
    function validateResponse()
    {
    }
}
