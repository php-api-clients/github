<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Gitignore;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class GetTemplate
{
    public const OPERATION_ID = 'gitignore/get-template';
    public const OPERATION_MATCH = 'GET /gitignore/templates/{name}';
    private const METHOD = 'GET';
    private const PATH = '/gitignore/templates/{name}';
    private string $name;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Gitignore\Templates\CbNameRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Gitignore\Templates\CbNameRcb $hydrator, string $name)
    {
        $this->name = $name;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{name}'), array($this->name), self::PATH));
    }
    /**
     * @return Schema\GitignoreTemplate
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\GitignoreTemplate
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\GitignoreTemplate::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\GitignoreTemplate::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
