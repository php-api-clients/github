<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class GetRequiredWorkflow
{
    public const OPERATION_ID = 'actions/get-required-workflow';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/required_workflows/{required_workflow_id}';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/actions/required_workflows/{required_workflow_id}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The unique identifier of the required workflow.**/
    private int $requiredWorkflowId;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdRcb $hydrator, string $org, int $requiredWorkflowId)
    {
        $this->org = $org;
        $this->requiredWorkflowId = $requiredWorkflowId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{required_workflow_id}'), array($this->org, $this->requiredWorkflowId), self::PATH));
    }
    /**
     * @return Schema\RequiredWorkflow
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\RequiredWorkflow
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\RequiredWorkflow::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\RequiredWorkflow::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
