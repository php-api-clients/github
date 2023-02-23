<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Orgs;

final class ListSecurityManagerTeams
{
    public const OPERATION_ID = 'orgs/list-security-manager-teams';
    public const OPERATION_MATCH = 'GET /orgs/{org}/security-managers';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/security-managers';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\SecurityManagers $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\SecurityManagers $hydrator, string $org)
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
     * @return \Rx\Observable<\ApiClients\Client\Github\Schema\TeamSimple>
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\TeamSimple::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : \ApiClients\Client\Github\Schema\TeamSimple {
                            return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\TeamSimple', $body);
                        });
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
