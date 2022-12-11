<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps;

final class CreateInstallationAccessToken_
{
    private const OPERATION_ID = 'apps/create-installation-access-token';
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
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{installation_id}'), array($this->installation_id), '/app/installations/{installation_id}/access_tokens'));
    }
    function validateResponse()
    {
    }
}
