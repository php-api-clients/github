<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Actions;

final class DeleteSelfHostedRunnerGroupFromOrg
{
    private const OPERATION_ID = 'actions/delete-self-hosted-runner-group-from-org';
    /****/
    public string $org;
    /**Unique identifier of the self-hosted runner group.**/
    public int $runner_group_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $runner_group_id)
    {
        $this->org = $org;
        $this->runner_group_id = $runner_group_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{org}', '{runner_group_id}'), array($this->org, $this->runner_group_id), '/orgs/{org}/actions/runner-groups/{runner_group_id}?'));
    }
    function validateResponse()
    {
    }
}
