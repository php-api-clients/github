<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Emojis;

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

final class Get
{
    public const OPERATION_ID    = 'emojis/get';
    public const OPERATION_MATCH = 'GET /emojis';
    private const METHOD         = 'GET';
    private const PATH           = '/emojis';
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Emojis $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Emojis $hydrator)
    {
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace([], [], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\Operation\Emojis\Get\Response\Applicationjson\H200
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operation\Emojis\Get\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject(Schema\Operation\Emojis\Get\Response\Applicationjson\H200::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
