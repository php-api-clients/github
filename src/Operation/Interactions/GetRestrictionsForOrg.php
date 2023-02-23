<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Interactions;

final class GetRestrictionsForOrg
{
    public const OPERATION_ID = 'interactions/get-restrictions-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/interaction-limits';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/interaction-limits';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\InteractionLimits $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\InteractionLimits $hydrator, string $org)
    {
        $this->org = $org;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}'), array($this->org), self::PATH));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\Operation\Interactions\GetRestrictionsForOrg\Response\Applicationjson\H200
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\Operation\Interactions\GetRestrictionsForOrg\Response\Applicationjson\H200
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\Operation\Interactions\GetRestrictionsForOrg\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\Operation\\Interactions\\GetRestrictionsForOrg\\Response\\Applicationjson\\H200', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
