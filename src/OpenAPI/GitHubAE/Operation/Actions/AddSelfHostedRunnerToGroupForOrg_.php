<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions;

final class AddSelfHostedRunnerToGroupForOrg_
{
    private const OPERATION_ID = 'actions/add-self-hosted-runner-to-group-for-org';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**Unique identifier of the self-hosted runner group.**/
    private readonly int $runner_group_id;
    /**Unique identifier of the self-hosted runner.**/
    private readonly int $runner_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org, int $runner_group_id, int $runner_id)
    {
        $this->org = $org;
        $this->runner_group_id = $runner_group_id;
        $this->runner_id = $runner_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{org}', '{runner_group_id}', '{runner_id}'), array($this->org, $this->runner_group_id, $this->runner_id), '/orgs/{org}/actions/runner-groups/{runner_group_id}/runners/{runner_id}'));
    }
    function validateResponse()
    {
    }
}
