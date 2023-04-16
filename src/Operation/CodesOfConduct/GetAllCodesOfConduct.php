<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\CodesOfConduct;

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

final class GetAllCodesOfConduct
{
    public const OPERATION_ID    = 'codes-of-conduct/get-all-codes-of-conduct';
    public const OPERATION_MATCH = 'GET /codes_of_conduct';
    private const METHOD         = 'GET';
    private const PATH           = '/codes_of_conduct';
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\CodesOfConduct $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\CodesOfConduct $hydrator)
    {
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace([], [], self::PATH));
    }

    /**
     * @return Observable<Schema\CodeOfConduct>
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
                            $this->responseSchemaValidator->validate($bodyItem, Reader::readFromJson(Schema\CodeOfConduct::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }

                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\CodeOfConduct {
                            return $this->hydrator->hydrateObject(Schema\CodeOfConduct::class, $body);
                        });
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
