<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Repos;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class GetDeploymentBranchPolicy
{
    public const OPERATION_ID = 'repos/get-deployment-branch-policy';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The name of the environment.**/
    private string $environmentName;
    /**The unique identifier of the branch policy.**/
    private int $branchPolicyId;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb\DeploymentDashBranchDashPolicies\CbBranchPolicyIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb\DeploymentDashBranchDashPolicies\CbBranchPolicyIdRcb $hydrator, string $owner, string $repo, string $environmentName, int $branchPolicyId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->environmentName = $environmentName;
        $this->branchPolicyId = $branchPolicyId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{environment_name}', '{branch_policy_id}'), array($this->owner, $this->repo, $this->environmentName, $this->branchPolicyId), self::PATH));
    }
    /**
     * @return Schema\DeploymentBranchPolicy
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\DeploymentBranchPolicy
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\DeploymentBranchPolicy::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\DeploymentBranchPolicy::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
