<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Markdown;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_encode;
use function str_replace;

final class Render
{
    public const OPERATION_ID    = 'markdown/render';
    public const OPERATION_MATCH = 'POST /markdown';
    private const METHOD         = 'POST';
    private const PATH           = '/markdown';

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Markdown $hydrator)
    {
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Markdown\Render\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace([], [], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
    }

    /** @return string|array{code: int} */
    public function createResponse(ResponseInterface $response): string|array
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'text/html':
                $body = $response->getBody()->getContents();
                switch ($code) {
                    case 200:
                        return $body;
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