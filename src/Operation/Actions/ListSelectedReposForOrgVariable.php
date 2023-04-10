<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Actions;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class ListSelectedReposForOrgVariable
{
    public const OPERATION_ID = 'actions/list-selected-repos-for-org-variable';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/variables/{name}/repositories';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/actions/variables/{name}/repositories';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The name of the variable.**/
    private string $name;
    /**Page number of the results to fetch.**/
    private int $page;
    /**The number of results per page (max 100).**/
    private int $perPage;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Actions\Variables\CbNameRcb\Repositories $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Actions\Variables\CbNameRcb\Repositories $hydrator, string $org, string $name, int $page = 1, int $perPage = 30)
    {
        $this->org = $org;
        $this->name = $name;
        $this->page = $page;
        $this->perPage = $perPage;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{name}', '{page}', '{per_page}'), array($this->org, $this->name, $this->page, $this->perPage), self::PATH . '?page={page}&per_page={per_page}'));
    }
    /**
     * @return Schema\Operation\Actions\ListSelectedReposForOrgVariable\Response\Applicationjson\H200
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Operation\Actions\ListSelectedReposForOrgVariable\Response\Applicationjson\H200
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\Actions\ListSelectedReposForOrgVariable\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\Actions\ListSelectedReposForOrgVariable\Response\Applicationjson\H200::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
