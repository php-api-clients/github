<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Apps;

final class RevokeInstallationAccessToken_
{
    private const OPERATION_ID = 'apps/revoke-installation-access-token';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array(), array(), '/installation/token?'));
    }
    function validateResponse()
    {
    }
}
