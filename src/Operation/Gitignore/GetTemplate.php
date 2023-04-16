<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Gitignore;

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

final class GetTemplate
{
    public const OPERATION_ID    = 'gitignore/get-template';
    public const OPERATION_MATCH = 'GET /gitignore/templates/{name}';
    private const METHOD         = 'GET';
    private const PATH           = '/gitignore/templates/{name}';
    private string $name;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Gitignore\Templates\CbNameRcb $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Gitignore\Templates\CbNameRcb $hydrator, string $name)
    {
        $this->name                    = $name;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{name}'], [$this->name], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\GitignoreTemplate
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\GitignoreTemplate::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject(Schema\GitignoreTemplate::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
