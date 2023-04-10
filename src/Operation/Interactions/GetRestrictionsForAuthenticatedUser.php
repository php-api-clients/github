<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Interactions;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class GetRestrictionsForAuthenticatedUser
{
    public const OPERATION_ID = 'interactions/get-restrictions-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/interaction-limits';
    private const METHOD = 'GET';
    private const PATH = '/user/interaction-limits';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\User\InteractionLimits $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\User\InteractionLimits $hydrator)
    {
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array(), array(), self::PATH));
    }
    /**
     * @return Schema\Operation\Interactions\GetRestrictionsForAuthenticatedUser\Response\Applicationjson\H200
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Operation\Interactions\GetRestrictionsForAuthenticatedUser\Response\Applicationjson\H200
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Default response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\Interactions\GetRestrictionsForAuthenticatedUser\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\Interactions\GetRestrictionsForAuthenticatedUser\Response\Applicationjson\H200::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
