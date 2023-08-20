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
use Throwable;

use function explode;
use function json_decode;
use function str_replace;

final class GetContent
{
    public const OPERATION_ID    = 'repos/get-content';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/contents/{path}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/contents/{path}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**path parameter **/
    private string $path;
    /**The name of the commit/branch/tag. Default: the repository’s default branch. **/
    private string $ref;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrator\Operation\Repos\Owner\Repo\Contents\Path $hydrator, string $owner, string $repo, string $path, string $ref)
    {
        $this->owner = $owner;
        $this->repo  = $repo;
        $this->path  = $path;
        $this->ref   = $ref;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{path}', '{ref}'], [$this->owner, $this->repo, $this->path, $this->ref], self::PATH . '?ref={ref}'));
    }

    /** @return Schema\ContentDirectory|Schema\ContentFile|Schema\ContentSymlink|Schema\ContentSubmodule|array{code: int} */
    public function createResponse(ResponseInterface $response): Schema\ContentDirectory|Schema\ContentFile|Schema\ContentSymlink|Schema\ContentSubmodule|array
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
                        $error = new RuntimeException();
                        try {
                            $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ContentDirectory::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                            return $this->hydrator->hydrateObject(Schema\ContentDirectory::class, $body);
                        } catch (Throwable) {
                            goto items_application_json_two_hundred_aaaaa;
                        }

                        items_application_json_two_hundred_aaaaa:
                        try {
                            $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ContentFile::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                            return $this->hydrator->hydrateObject(Schema\ContentFile::class, $body);
                        } catch (Throwable) {
                            goto items_application_json_two_hundred_aaaab;
                        }

                        items_application_json_two_hundred_aaaab:
                        try {
                            $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ContentSymlink::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                            return $this->hydrator->hydrateObject(Schema\ContentSymlink::class, $body);
                        } catch (Throwable) {
                            goto items_application_json_two_hundred_aaaac;
                        }

                        items_application_json_two_hundred_aaaac:
                        try {
                            $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ContentSubmodule::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                            return $this->hydrator->hydrateObject(Schema\ContentSubmodule::class, $body);
                        } catch (Throwable) {
                            goto items_application_json_two_hundred_aaaad;
                        }

                        items_application_json_two_hundred_aaaad:
                        throw $error;
                    /**
                     * Resource not found
                     **/
                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Forbidden
                     **/

                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(403, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        switch ($code) {
            /**
             * Found
             **/
            case 302:
                return ['code' => 302];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
