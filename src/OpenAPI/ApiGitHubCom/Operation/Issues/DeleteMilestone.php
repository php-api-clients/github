<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Milestones\CbMilestoneNumberRcb;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_decode;
use function str_replace;

final class DeleteMilestone
{
    public const OPERATION_ID    = 'issues/delete-milestone';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/milestones/{milestone_number}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/milestones/{milestone_number}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The number that identifies the milestone.**/
    private int $milestone_number;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly CbMilestoneNumberRcb $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, CbMilestoneNumberRcb $hydrator, string $owner, string $repo, int $milestone_number)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->milestone_number        = $milestone_number;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{milestone_number}'], [$this->owner, $this->repo, $this->milestone_number], self::PATH));
    }

    function createResponse(ResponseInterface $response): BasicError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body        = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Resource not found**/
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
