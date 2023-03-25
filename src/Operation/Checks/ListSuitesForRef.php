<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Checks;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class ListSuitesForRef
{
    public const OPERATION_ID = 'checks/list-suites-for-ref';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/commits/{ref}/check-suites';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/commits/{ref}/check-suites';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**ref parameter**/
    private string $ref;
    /**Filters check suites by GitHub App `id`.**/
    private int $appId;
    /**Returns check runs with the specified `name`.**/
    private string $checkName;
    /**The number of results per page (max 100).**/
    private int $perPage;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\CheckSuites $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\CheckSuites $hydrator, string $owner, string $repo, string $ref, int $appId, string $checkName, int $perPage = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->ref = $ref;
        $this->appId = $appId;
        $this->checkName = $checkName;
        $this->perPage = $perPage;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{ref}', '{app_id}', '{check_name}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->ref, $this->appId, $this->checkName, $this->perPage, $this->page), self::PATH . '?appId={app_id}&checkName={check_name}&perPage={per_page}&page={page}'));
    }
    /**
     * @return Schema\Operation\Checks\ListSuitesForRef\Response\Applicationjson\H200
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Operation\Checks\ListSuitesForRef\Response\Applicationjson\H200
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\Checks\ListSuitesForRef\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\Checks\ListSuitesForRef\Response\Applicationjson\H200::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
