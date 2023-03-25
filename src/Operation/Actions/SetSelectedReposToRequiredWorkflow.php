<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class SetSelectedReposToRequiredWorkflow
{
    public const OPERATION_ID = 'actions/set-selected-repos-to-required-workflow';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/actions/required_workflows/{required_workflow_id}/repositories';
    private const METHOD = 'PUT';
    private const PATH = '/orgs/{org}/actions/required_workflows/{required_workflow_id}/repositories';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The unique identifier of the required workflow.**/
    private int $requiredWorkflowId;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, string $org, int $requiredWorkflowId)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->org = $org;
        $this->requiredWorkflowId = $requiredWorkflowId;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\Actions\SetSelectedReposToRequiredWorkflow\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{required_workflow_id}'), array($this->org, $this->requiredWorkflowId), self::PATH), array('Content-Type' => 'application/json'), json_encode($data));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
