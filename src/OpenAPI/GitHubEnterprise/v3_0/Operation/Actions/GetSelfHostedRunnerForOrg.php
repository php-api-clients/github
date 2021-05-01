<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions;

final class GetSelfHostedRunnerForOrg
{
    private const OPERATION_ID = 'actions/get-self-hosted-runner-for-org';
    /****/
    public string $org;
    /**Unique identifier of the self-hosted runner.**/
    public int $runner_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $runner_id)
    {
        $this->org = $org;
        $this->runner_id = $runner_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{runner_id}'), array($this->org, $this->runner_id), '/orgs/{org}/actions/runners/{runner_id}?'));
    }
    function validateResponse()
    {
    }
}