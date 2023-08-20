<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Users;

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

final class GetAuthenticated
{
    public const OPERATION_ID    = 'users/get-authenticated';
    public const OPERATION_MATCH = 'GET /user';
    private const METHOD         = 'GET';
    private const PATH           = '/user';

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrator\Operation\User $hydrator)
    {
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace([], [], self::PATH));
    }

    /** @return Schema\PrivateUser|Schema\PublicUser|array{code: int} */
    public function createResponse(ResponseInterface $response): Schema\PrivateUser|Schema\PublicUser|array
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
                            $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\PrivateUser::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                            return $this->hydrator->hydrateObject(Schema\PrivateUser::class, $body);
                        } catch (Throwable) {
                            goto items_application_json_two_hundred_aaaaa;
                        }

                        items_application_json_two_hundred_aaaaa:
                        try {
                            $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\PublicUser::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                            return $this->hydrator->hydrateObject(Schema\PublicUser::class, $body);
                        } catch (Throwable) {
                            goto items_application_json_two_hundred_aaaab;
                        }

                        items_application_json_two_hundred_aaaab:
                        throw $error;
                    /**
                     * Forbidden
                     **/
                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(403, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Requires authentication
                     **/

                    case 401:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(401, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        switch ($code) {
            /**
             * Not modified
             **/
            case 304:
                return ['code' => 304];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
