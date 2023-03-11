<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class GetRepoRequiredWorkflow
{
    public const OPERATION_ID = 'actions/get-repo-required-workflow';
    public const OPERATION_MATCH = 'GET /repos/{org}/{repo}/actions/required_workflows/{required_workflow_id_for_repo}';
    private const METHOD = 'GET';
    private const PATH = '/repos/{org}/{repo}/actions/required_workflows/{required_workflow_id_for_repo}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The ID of the required workflow that has run at least once in a repository.**/
    private int $required_workflow_id_for_repo;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb $hydrator, string $org, string $repo, int $required_workflow_id_for_repo)
    {
        $this->org = $org;
        $this->repo = $repo;
        $this->required_workflow_id_for_repo = $required_workflow_id_for_repo;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{repo}', '{required_workflow_id_for_repo}'), array($this->org, $this->repo, $this->required_workflow_id_for_repo), self::PATH));
    }
    /**
     * @return Schema\RepoRequiredWorkflow
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\RepoRequiredWorkflow
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\RepoRequiredWorkflow::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\RepoRequiredWorkflow::class, $body);
                }
                break;
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\BasicError::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
