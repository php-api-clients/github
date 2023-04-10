<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Meta;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class GetOctocat
{
    public const OPERATION_ID = 'meta/get-octocat';
    public const OPERATION_MATCH = 'GET /octocat';
    private const METHOD = 'GET';
    private const PATH = '/octocat';
    /**The words to show in Octocat's speech bubble**/
    private string $s;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Octocat $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Octocat $hydrator, string $s)
    {
        $this->s = $s;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{s}'), array($this->s), self::PATH . '?s={s}'));
    }
    /**
     * @return Schema\Operation\Meta\GetOctocat\Response\ApplicationoctocatStream\H200
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Operation\Meta\GetOctocat\Response\ApplicationoctocatStream\H200
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/octocat-stream':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\Meta\GetOctocat\Response\ApplicationoctocatStream\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\Meta\GetOctocat\Response\ApplicationoctocatStream\H200::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
