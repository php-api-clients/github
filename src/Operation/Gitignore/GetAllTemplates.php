<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Gitignore;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class GetAllTemplates
{
    public const OPERATION_ID = 'gitignore/get-all-templates';
    public const OPERATION_MATCH = 'GET /gitignore/templates';
    private const METHOD = 'GET';
    private const PATH = '/gitignore/templates';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Gitignore\Templates $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Gitignore\Templates $hydrator)
    {
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array(), array(), self::PATH));
    }
    /**
     * @return \Rx\Observable<Schema\Operation\Gitignore\GetAllTemplates\Response\Applicationjson\H200>
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, \cebe\openapi\Reader::readFromJson(Schema\Operation\Gitignore\GetAllTemplates\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\Operation\Gitignore\GetAllTemplates\Response\Applicationjson\H200 {
                            return $this->hydrator->hydrateObject(Schema\Operation\Gitignore\GetAllTemplates\Response\Applicationjson\H200::class, $body);
                        });
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
