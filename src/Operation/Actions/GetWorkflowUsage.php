<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Actions;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class GetWorkflowUsage
{
    public const OPERATION_ID = 'actions/get-workflow-usage';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/workflows/{workflow_id}/timing';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/actions/workflows/{workflow_id}/timing';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The ID of the workflow. You can also pass the workflow file name as a string.**/
    private $workflowId;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Timing $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Timing $hydrator, string $owner, string $repo, $workflowId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->workflowId = $workflowId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{workflow_id}'), array($this->owner, $this->repo, $this->workflowId), self::PATH));
    }
    /**
     * @return Schema\WorkflowUsage
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\WorkflowUsage
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\WorkflowUsage::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\WorkflowUsage::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
