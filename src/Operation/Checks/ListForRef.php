<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Checks;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class ListForRef
{
    public const OPERATION_ID = 'checks/list-for-ref';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/commits/{ref}/check-runs';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/commits/{ref}/check-runs';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**ref parameter**/
    private string $ref;
    /**Returns check runs with the specified `name`.**/
    private string $checkName;
    /**Returns check runs with the specified `status`.**/
    private string $status;
    private int $appId;
    /**Filters check runs by their `completed_at` timestamp. `latest` returns the most recent check runs.**/
    private string $filter;
    /**The number of results per page (max 100).**/
    private int $perPage;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\CheckRuns $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\CheckRuns $hydrator, string $owner, string $repo, string $ref, string $checkName, string $status, int $appId, string $filter = 'latest', int $perPage = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->ref = $ref;
        $this->checkName = $checkName;
        $this->status = $status;
        $this->appId = $appId;
        $this->filter = $filter;
        $this->perPage = $perPage;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{ref}', '{check_name}', '{status}', '{app_id}', '{filter}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->ref, $this->checkName, $this->status, $this->appId, $this->filter, $this->perPage, $this->page), self::PATH . '?check_name={check_name}&status={status}&app_id={app_id}&filter={filter}&per_page={per_page}&page={page}'));
    }
    /**
     * @return Schema\Operation\Checks\ListForRef\Response\Applicationjson\H200
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Operation\Checks\ListForRef\Response\Applicationjson\H200
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\Checks\ListForRef\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\Checks\ListForRef\Response\Applicationjson\H200::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
