<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

final class UpdateDeploymentBranchPolicy_
{
    private const OPERATION_ID = 'repos/update-deployment-branch-policy';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The name of the environment.**/
    private readonly string $environment_name;
    /**The unique identifier of the branch policy.**/
    private readonly int $branch_policy_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, string $environment_name, int $branch_policy_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->environment_name = $environment_name;
        $this->branch_policy_id = $branch_policy_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{owner}', '{repo}', '{environment_name}', '{branch_policy_id}'), array($this->owner, $this->repo, $this->environment_name, $this->branch_policy_id), '/repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}'));
    }
    function validateResponse()
    {
    }
}
