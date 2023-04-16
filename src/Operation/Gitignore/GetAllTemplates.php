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
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;

use function explode;
use function json_decode;
use function str_replace;

final class GetAllTemplates
{
    public const OPERATION_ID    = 'gitignore/get-all-templates';
    public const OPERATION_MATCH = 'GET /gitignore/templates';
    private const METHOD         = 'GET';
    private const PATH           = '/gitignore/templates';
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Gitignore\Templates $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Gitignore\Templates $hydrator)
    {
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace([], [], self::PATH));
    }

    /**
     * @return Observable<Schema\Operation\Gitignore\GetAllTemplates\Response\Applicationjson\H200>
     */
    public function createResponse(ResponseInterface $response): Observable
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
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, Reader::readFromJson(Schema\Operation\Gitignore\GetAllTemplates\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }

                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\Operation\Gitignore\GetAllTemplates\Response\Applicationjson\H200 {
                            return $this->hydrator->hydrateObject(Schema\Operation\Gitignore\GetAllTemplates\Response\Applicationjson\H200::class, $body);
                        });
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
