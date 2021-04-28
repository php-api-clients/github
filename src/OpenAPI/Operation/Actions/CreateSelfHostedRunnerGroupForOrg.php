<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Actions;

final class CreateSelfHostedRunnerGroupForOrg
{
    private const OPERATION_ID = 'actions/create-self-hosted-runner-group-for-org';
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
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{org}'), array($this->org), '/orgs/{org}/actions/runner-groups?'));
    }
    function validateResponse()
    {
    }
}
