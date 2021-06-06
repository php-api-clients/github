<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions;

final class SetRestrictionsForOrg
{
    private const OPERATION_ID = 'interactions/set-restrictions-for-org';
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
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{org}'), array($this->org), '/orgs/{org}/interaction-limits?'));
    }
    function validateResponse()
    {
    }
}
