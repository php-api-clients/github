<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Users;

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
use function str_replace;

final class GetById
{
    public const OPERATION_ID    = 'users/get-by-id';
    public const OPERATION_MATCH = 'GET /user/{account_id}';
    /**account_id parameter **/
    private int $accountId;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\User\AccountId $hydrator, int $accountId)
    {
        $this->accountId = $accountId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{account_id}'], [$this->accountId], '/user/{account_id}'));
    }

    public function createResponse(ResponseInterface $response): Schema\PrivateUser|Schema\PublicUser
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
