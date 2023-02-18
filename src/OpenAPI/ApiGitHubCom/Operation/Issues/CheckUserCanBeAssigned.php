<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Assignees\CbAssigneeRcb;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_decode;
use function str_replace;

final class CheckUserCanBeAssigned
{
    public const OPERATION_ID    = 'issues/check-user-can-be-assigned';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/assignees/{assignee}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/assignees/{assignee}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    private string $assignee;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly CbAssigneeRcb $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, CbAssigneeRcb $hydrator, string $owner, string $repo, string $assignee)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->assignee                = $assignee;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{assignee}'], [$this->owner, $this->repo, $this->assignee], self::PATH));
    }

    function createResponse(ResponseInterface $response): BasicError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body        = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Otherwise a `404` status code is returned.**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\BasicError', $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
