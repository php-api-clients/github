<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin;

final class ListPublicKeys_
{
    private const OPERATION_ID = 'enterprise-admin/list-public-keys';
    public const OPERATION_MATCH = 'GET /admin/keys';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    /**The direction to sort the results by.**/
    private readonly string $direction;
    private readonly string $sort;
    /**Only show public keys accessed after the given time.**/
    private readonly string $since;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created', string $since)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->direction = $direction;
        $this->sort = $sort;
        $this->since = $since;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{per_page}', '{page}', '{direction}', '{sort}', '{since}'), array($this->per_page, $this->page, $this->direction, $this->sort, $this->since), '/admin/keys?per_page={per_page}&page={page}&direction={direction}&sort={sort}&since={since}'));
    }
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C9Ac0Dc3D8Fa53070C193E614C3Ccf983
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        $hydrator = new \WyriHaximus\Hydrator\Hydrator();
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C9Ac0Dc3D8Fa53070C193E614C3Ccf983::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $hydrator->hydrate('\\ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\Schema\\Unknown\\C9Ac0Dc3D8Fa53070C193E614C3Ccf983', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
