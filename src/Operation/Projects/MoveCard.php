<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Projects;

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
use function json_encode;
use function str_replace;

final class MoveCard
{
    public const OPERATION_ID    = 'projects/move-card';
    public const OPERATION_MATCH = 'POST /projects/columns/cards/{card_id}/moves';
    private const METHOD         = 'POST';
    private const PATH           = '/projects/columns/cards/{card_id}/moves';
    private readonly SchemaValidator $requestSchemaValidator;
    /**The unique identifier of the card. **/
    private int $cardId;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Projects\Columns\Cards\CardId\Moves $hydrator;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, Hydrator\Operation\Projects\Columns\Cards\CardId\Moves $hydrator, int $cardId)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->cardId                  = $cardId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Projects\MoveCard\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace(['{card_id}'], [$this->cardId], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
    }

    /**
     * @return Schema\Operations\Gists\CheckIsStarred\Response\ApplicationJson\NotFound|array{code: int}
     */
    public function createResponse(ResponseInterface $response): Schema\Operations\Gists\CheckIsStarred\Response\ApplicationJson\NotFound|array
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
                    case 201:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\Gists\CheckIsStarred\Response\ApplicationJson\NotFound::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\Operations\Gists\CheckIsStarred\Response\ApplicationJson\NotFound::class, $body);
                    /**
                     * Forbidden
                     **/

                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\Projects\MoveCard\Response\ApplicationJson\Forbidden::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\Operations\Projects\MoveCard\Response\ApplicationJson\Forbidden(403, $this->hydrator->hydrateObject(Schema\Operations\Projects\MoveCard\Response\ApplicationJson\Forbidden::class, $body));
                    /**
                     * Requires authentication
                     **/

                    case 401:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(401, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Response
                     **/

                    case 503:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\Projects\MoveCard\Response\ApplicationJson\ServiceUnavailable::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\Operations\Projects\MoveCard\Response\ApplicationJson\ServiceUnavailable(503, $this->hydrator->hydrateObject(Schema\Operations\Projects\MoveCard\Response\ApplicationJson\ServiceUnavailable::class, $body));
                    /**
                     * Validation failed, or the endpoint has been spammed.
                     **/

                    case 422:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ValidationError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\ValidationError(422, $this->hydrator->hydrateObject(Schema\ValidationError::class, $body));
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
