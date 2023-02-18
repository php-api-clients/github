<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_decode;
use function str_replace;

final class Get
{
    public const OPERATION_ID    = 'checks/get';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/check-runs/{check_run_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/check-runs/{check_run_id}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The unique identifier of the check run.**/
    private int $check_run_id;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly CbCheckRunIdRcb $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, CbCheckRunIdRcb $hydrator, string $owner, string $repo, int $check_run_id)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->check_run_id            = $check_run_id;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{check_run_id}'], [$this->owner, $this->repo, $this->check_run_id], self::PATH));
    }

    function createResponse(ResponseInterface $response): CheckRun
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body        = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(CheckRun::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\CheckRun', $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
