<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Meta;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function str_replace;

final class GetZen
{
    public const OPERATION_ID    = 'meta/get-zen';
    public const OPERATION_MATCH = 'GET /zen';
    private const METHOD         = 'GET';
    private const PATH           = '/zen';
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Zen $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Zen $hydrator)
    {
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace([], [], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\Operation\Meta\GetZen\Response\Textplain\H200
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'text/plain':
                $body = $response->getBody()->getContents();
                switch ($code) {
                    /**
                     * Response
                    **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operation\Meta\GetZen\Response\Textplain\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject(Schema\Operation\Meta\GetZen\Response\Textplain\H200::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
