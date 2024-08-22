<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Repos;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;
use Throwable;

use function explode;
use function json_decode;
use function json_encode;
use function str_replace;

final class CreateOrUpdateFileContents
{
    public const OPERATION_ID    = 'repos/create-or-update-file-contents';
    public const OPERATION_MATCH = 'PUT /repos/{owner}/{repo}/contents/{path}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**path parameter **/
    private string $path;

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\Contents\Path $hydrator, string $owner, string $repo, string $path)
    {
        $this->owner = $owner;
        $this->repo  = $repo;
        $this->path  = $path;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Repos\CreateOrUpdateFileContents\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('PUT', str_replace(['{owner}', '{repo}', '{path}'], [$this->owner, $this->repo, $this->path], '/repos/{owner}/{repo}/contents/{path}'), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): Schema\FileCommit
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\FileCommit::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\FileCommit::class, $body);
                    /**
                     * Response
                     **/

                    case 201:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\FileCommit::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\FileCommit::class, $body);
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Validation failed, or the endpoint has been spammed.
                     **/

                    case 422:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ValidationError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\ValidationError(422, $this->hydrator->hydrateObject(Schema\ValidationError::class, $body));
                    /**
                     * Conflict
                     **/

                    case 409:
                        $error = new RuntimeException();
                        try {
                            $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                            return $this->hydrator->hydrateObject(Schema\BasicError::class, $body);
                        } catch (Throwable) {
                            goto items_application_json_four_hundred_nine_aaaaa;
                        }

                        items_application_json_four_hundred_nine_aaaaa:
                        try {
                            $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\RepositoryRuleViolationError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                            return $this->hydrator->hydrateObject(Schema\RepositoryRuleViolationError::class, $body);
                        } catch (Throwable) {
                            goto items_application_json_four_hundred_nine_aaaab;
                        }

                        items_application_json_four_hundred_nine_aaaab:
                        throw $error;
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
