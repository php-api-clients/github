<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Orgs;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class ListAppInstallations
{
    public const OPERATION_ID = 'orgs/list-app-installations';
    public const OPERATION_MATCH = 'GET /orgs/{org}/installations';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/installations';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The number of results per page (max 100).**/
    private int $perPage;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Installations $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Installations $hydrator, string $org, int $perPage = 30, int $page = 1)
    {
        $this->org = $org;
        $this->perPage = $perPage;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{per_page}', '{page}'), array($this->org, $this->perPage, $this->page), self::PATH . '?per_page={per_page}&page={page}'));
    }
    /**
     * @return Schema\Operation\Orgs\ListAppInstallations\Response\Applicationjson\H200
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Operation\Orgs\ListAppInstallations\Response\Applicationjson\H200
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\Orgs\ListAppInstallations\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\Orgs\ListAppInstallations\Response\Applicationjson\H200::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}