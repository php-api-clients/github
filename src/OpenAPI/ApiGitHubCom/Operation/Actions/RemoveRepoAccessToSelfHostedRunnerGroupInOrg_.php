<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class RemoveRepoAccessToSelfHostedRunnerGroupInOrg_
{
    private const OPERATION_ID = 'actions/remove-repo-access-to-self-hosted-runner-group-in-org';
    /**The organization name. The name is not case sensitive.**/
    public string $org;
    /**Unique identifier of the self-hosted runner group.**/
    public int $runner_group_id;
    /**The unique identifier of the repository.**/
    public int $repository_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $runner_group_id, $repository_id)
    {
        $this->org = $org;
        $this->runner_group_id = $runner_group_id;
        $this->repository_id = $repository_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{org}', '{runner_group_id}', '{repository_id}'), array($this->org, $this->runner_group_id, $this->repository_id), '/orgs/{org}/actions/runner-groups/{runner_group_id}/repositories/{repository_id}?'));
    }
    function validateResponse()
    {
    }
}
