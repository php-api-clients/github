<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Repos;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class DeleteDeploymentBranchPolicy
{
    public const OPERATION_ID = 'repos/delete-deployment-branch-policy';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The name of the environment.**/
    private string $environmentName;
    /**The unique identifier of the branch policy.**/
    private int $branchPolicyId;
    public function __construct(string $owner, string $repo, string $environmentName, int $branchPolicyId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->environmentName = $environmentName;
        $this->branchPolicyId = $branchPolicyId;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{environment_name}', '{branch_policy_id}'), array($this->owner, $this->repo, $this->environmentName, $this->branchPolicyId), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}