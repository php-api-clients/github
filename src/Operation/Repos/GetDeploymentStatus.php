<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Repos;

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

final class GetDeploymentStatus
{
    public const OPERATION_ID    = 'repos/get-deployment-status';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/deployments/{deployment_id}/statuses/{status_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/deployments/{deployment_id}/statuses/{status_id}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository. The name is not case sensitive. **/
    private string $repo;
    /**deployment_id parameter **/
    private int $deploymentId;
    private int $statusId;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses\StatusId $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses\StatusId $hydrator, string $owner, string $repo, int $deploymentId, int $statusId)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->deploymentId            = $deploymentId;
        $this->statusId                = $statusId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{deployment_id}', '{status_id}'], [$this->owner, $this->repo, $this->deploymentId, $this->statusId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\DeploymentStatus
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\DeploymentStatus::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\DeploymentStatus::class, $body);
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
