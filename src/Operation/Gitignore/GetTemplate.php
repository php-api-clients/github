<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Gitignore;

final class GetTemplate
{
    public const OPERATION_ID = 'gitignore/get-template';
    public const OPERATION_MATCH = 'GET /gitignore/templates/{name}';
    private const METHOD = 'GET';
    private const PATH = '/gitignore/templates/{name}';
    private string $name;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Gitignore\Templates\CbNameRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Gitignore\Templates\CbNameRcb $hydrator, string $name)
    {
        $this->name = $name;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{name}'), array($this->name), self::PATH));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\GitignoreTemplate
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\GitignoreTemplate
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\GitignoreTemplate::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\GitignoreTemplate', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
