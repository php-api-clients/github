<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function json_encode;
use function str_replace;

final class SetSelectedReposToRequiredWorkflow
{
    public const OPERATION_ID    = 'actions/set-selected-repos-to-required-workflow';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/actions/required_workflows/{required_workflow_id}/repositories';
    private const METHOD         = 'PUT';
    private const PATH           = '/orgs/{org}/actions/required_workflows/{required_workflow_id}/repositories';
    private readonly SchemaValidator $requestSchemaValidator;
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The unique identifier of the required workflow.**/
    private int $requiredWorkflowId;

    public function __construct(SchemaValidator $requestSchemaValidator, string $org, int $requiredWorkflowId)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->org                    = $org;
        $this->requiredWorkflowId     = $requiredWorkflowId;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Actions\SetSelectedReposToRequiredWorkflow\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace(['{org}', '{required_workflow_id}'], [$this->org, $this->requiredWorkflowId], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
