<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
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

final class GetRepoRequiredWorkflowUsage
{
    public const OPERATION_ID    = 'actions/get-repo-required-workflow-usage';
    public const OPERATION_MATCH = 'GET /repos/{org}/{repo}/actions/required_workflows/{required_workflow_id_for_repo}/timing';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{org}/{repo}/actions/required_workflows/{required_workflow_id_for_repo}/timing';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The ID of the required workflow that has run at least once in a repository.**/
    private int $requiredWorkflowIdForRepo;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb\Timing $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb\Timing $hydrator, string $org, string $repo, int $requiredWorkflowIdForRepo)
    {
        $this->org                       = $org;
        $this->repo                      = $repo;
        $this->requiredWorkflowIdForRepo = $requiredWorkflowIdForRepo;
        $this->responseSchemaValidator   = $responseSchemaValidator;
        $this->hydrator                  = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{repo}', '{required_workflow_id_for_repo}'], [$this->org, $this->repo, $this->requiredWorkflowIdForRepo], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\WorkflowUsage
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\WorkflowUsage::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject(Schema\WorkflowUsage::class, $body);
                    /**
                     * Resource not found
                    **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
