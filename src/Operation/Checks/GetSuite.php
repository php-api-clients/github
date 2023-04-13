<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Checks;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class GetSuite
{
    public const OPERATION_ID = 'checks/get-suite';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/check-suites/{check_suite_id}';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/check-suites/{check_suite_id}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The unique identifier of the check suite.**/
    private int $checkSuiteId;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb $hydrator, string $owner, string $repo, int $checkSuiteId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->checkSuiteId = $checkSuiteId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{check_suite_id}'), array($this->owner, $this->repo, $this->checkSuiteId), self::PATH));
    }
    /**
     * @return Schema\CheckSuite
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\CheckSuite
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
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\CheckSuite::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\CheckSuite::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
