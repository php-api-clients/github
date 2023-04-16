<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Interactions;

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

final class GetRestrictionsForAuthenticatedUser
{
    public const OPERATION_ID    = 'interactions/get-restrictions-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/interaction-limits';
    private const METHOD         = 'GET';
    private const PATH           = '/user/interaction-limits';
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\User\InteractionLimits $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\User\InteractionLimits $hydrator)
    {
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace([], [], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\Operation\Interactions\GetRestrictionsForAuthenticatedUser\Response\Applicationjson\H200
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Default response
                    **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operation\Interactions\GetRestrictionsForAuthenticatedUser\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject(Schema\Operation\Interactions\GetRestrictionsForAuthenticatedUser\Response\Applicationjson\H200::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
