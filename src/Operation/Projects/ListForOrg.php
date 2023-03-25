<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Projects;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class ListForOrg
{
    public const OPERATION_ID = 'projects/list-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/projects';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/projects';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**Indicates the state of the projects to return.**/
    private string $state;
    /**The number of results per page (max 100).**/
    private int $perPage;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Projects $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Projects $hydrator, string $org, string $state = 'open', int $perPage = 30, int $page = 1)
    {
        $this->org = $org;
        $this->state = $state;
        $this->perPage = $perPage;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{state}', '{per_page}', '{page}'), array($this->org, $this->state, $this->perPage, $this->page), self::PATH . '?state={state}&perPage={per_page}&page={page}'));
    }
    /**
     * @return \Rx\Observable<Schema\Project>
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, \cebe\openapi\Reader::readFromJson(Schema\Project::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\Project {
                            return $this->hydrator->hydrateObject(Schema\Project::class, $body);
                        });
                }
                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ValidationErrorSimple::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\ValidationErrorSimple(422, $this->hydrator->hydrateObject(Schema\ValidationErrorSimple::class, $body));
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
