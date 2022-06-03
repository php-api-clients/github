<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions;

final class RemoveRestrictionsForOrg_
{
    private const OPERATION_ID = 'interactions/remove-restrictions-for-org';
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
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{org}'), array($this->org), '/orgs/{org}/interaction-limits?'));
    }
    function validateResponse()
    {
    }
}
