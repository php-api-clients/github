<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions;

final class RemoveSelfHostedRunnerFromGroupForOrg_
{
    private const OPERATION_ID = 'actions/remove-self-hosted-runner-from-group-for-org';
    /**The organization name. The name is not case sensitive.**/
    public string $org;
    /**Unique identifier of the self-hosted runner group.**/
    public int $runner_group_id;
    /**Unique identifier of the self-hosted runner.**/
    public int $runner_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $runner_group_id, $runner_id)
    {
        $this->org = $org;
        $this->runner_group_id = $runner_group_id;
        $this->runner_id = $runner_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{org}', '{runner_group_id}', '{runner_id}'), array($this->org, $this->runner_group_id, $this->runner_id), '/orgs/{org}/actions/runner-groups/{runner_group_id}/runners/{runner_id}?'));
    }
    function validateResponse()
    {
    }
}
