<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps;

final class UnsuspendInstallation
{
    private const OPERATION_ID = 'apps/unsuspend-installation';
    /**installation_id parameter**/
    public int $installation_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($installation_id)
    {
        $this->installation_id = $installation_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{installation_id}'), array($this->installation_id), '/app/installations/{installation_id}/suspended?'));
    }
    function validateResponse()
    {
    }
}
