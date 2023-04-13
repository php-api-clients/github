<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Migrations;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class ListForOrg
{
    public const OPERATION_ID = 'migrations/list-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/migrations';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/migrations';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**Exclude attributes from the API response to improve performance**/
    private array $exclude;
    /**The number of results per page (max 100).**/
    private int $perPage;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Migrations $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Migrations $hydrator, string $org, array $exclude, int $perPage = 30, int $page = 1)
    {
        $this->org = $org;
        $this->exclude = $exclude;
        $this->perPage = $perPage;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{exclude}', '{per_page}', '{page}'), array($this->org, $this->exclude, $this->perPage, $this->page), self::PATH . '?exclude={exclude}&per_page={per_page}&page={page}'));
    }
    /**
     * @return \Rx\Observable<Schema\Migration>
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable
    {
        $code = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                    **/
                    case 200:
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, \cebe\openapi\Reader::readFromJson(Schema\Migration::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\Migration {
                            return $this->hydrator->hydrateObject(Schema\Migration::class, $body);
                        });
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
