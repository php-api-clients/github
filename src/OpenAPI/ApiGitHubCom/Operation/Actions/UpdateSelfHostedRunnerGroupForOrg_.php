<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class UpdateSelfHostedRunnerGroupForOrg_
{
    private const OPERATION_ID = 'actions/update-self-hosted-runner-group-for-org';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**Unique identifier of the self-hosted runner group.**/
    private readonly int $runner_group_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org, int $runner_group_id)
    {
        $this->org = $org;
        $this->runner_group_id = $runner_group_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{org}', '{runner_group_id}'), array($this->org, $this->runner_group_id), '/orgs/{org}/actions/runner-groups/{runner_group_id}'));
    }
    function validateResponse()
    {
    }
}
