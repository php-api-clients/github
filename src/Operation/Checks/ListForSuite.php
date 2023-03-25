<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Checks;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class ListForSuite
{
    public const OPERATION_ID = 'checks/list-for-suite';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/check-suites/{check_suite_id}/check-runs';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/check-suites/{check_suite_id}/check-runs';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The unique identifier of the check suite.**/
    private int $checkSuiteId;
    /**Returns check runs with the specified `name`.**/
    private string $checkName;
    /**Returns check runs with the specified `status`.**/
    private string $status;
    /**Filters check runs by their `completed_at` timestamp. `latest` returns the most recent check runs.**/
    private string $filter;
    /**The number of results per page (max 100).**/
    private int $perPage;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb\CheckDashRuns $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb\CheckDashRuns $hydrator, string $owner, string $repo, int $checkSuiteId, string $checkName, string $status, string $filter = 'latest', int $perPage = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->checkSuiteId = $checkSuiteId;
        $this->checkName = $checkName;
        $this->status = $status;
        $this->filter = $filter;
        $this->perPage = $perPage;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{check_suite_id}', '{check_name}', '{status}', '{filter}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->checkSuiteId, $this->checkName, $this->status, $this->filter, $this->perPage, $this->page), self::PATH . '?checkName={check_name}&status={status}&filter={filter}&perPage={per_page}&page={page}'));
    }
    /**
     * @return Schema\Operation\Checks\ListForSuite\Response\Applicationjson\H200
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Operation\Checks\ListForSuite\Response\Applicationjson\H200
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\Checks\ListForSuite\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\Checks\ListForSuite\Response\Applicationjson\H200::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
