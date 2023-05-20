<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Repos;

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

final class GetCodeFrequencyStats
{
    public const OPERATION_ID    = 'repos/get-code-frequency-stats';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/stats/code_frequency';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/stats/code_frequency';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository. The name is not case sensitive. **/
    private string $repo;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\Owner\Repo\Stats\CodeFrequency $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\Owner\Repo\Stats\CodeFrequency $hydrator, string $owner, string $repo)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}'], [$this->owner, $this->repo], self::PATH));
    }

    /**
     * @return Schema\WebhookDeploymentCreated\Deployment\Payload\Zero|array{code: int}
     */
    public function createResponse(ResponseInterface $response): Schema\WebhookDeploymentCreated\Deployment\Payload\Zero|array
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Accepted
                     **/
                    case 202:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\WebhookDeploymentCreated\Deployment\Payload\Zero::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\WebhookDeploymentCreated\Deployment\Payload\Zero::class, $body);
                }

                break;
        }

        switch ($code) {
            /**
             * A header with no content is returned.
             **/
            case 204:
                return ['code' => 204];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
