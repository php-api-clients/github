<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class GetRequiredWorkflow
{
    public const OPERATION_ID    = 'actions/get-required-workflow';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/required_workflows/{required_workflow_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/actions/required_workflows/{required_workflow_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The unique identifier of the required workflow. **/
    private int $requiredWorkflowId;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\Org\Actions\RequiredWorkflows\RequiredWorkflowId $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\Org\Actions\RequiredWorkflows\RequiredWorkflowId $hydrator, string $org, int $requiredWorkflowId)
    {
        $this->org                     = $org;
        $this->requiredWorkflowId      = $requiredWorkflowId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{required_workflow_id}'], [$this->org, $this->requiredWorkflowId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\RequiredWorkflow
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\RequiredWorkflow::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\RequiredWorkflow::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
