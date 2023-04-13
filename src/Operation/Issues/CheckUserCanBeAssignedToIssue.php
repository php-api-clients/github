<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Issues;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class CheckUserCanBeAssignedToIssue
{
    public const OPERATION_ID = 'issues/check-user-can-be-assigned-to-issue';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/issues/{issue_number}/assignees/{assignee}';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/issues/{issue_number}/assignees/{assignee}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The number that identifies the issue.**/
    private int $issueNumber;
    private string $assignee;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Assignees\CbAssigneeRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Assignees\CbAssigneeRcb $hydrator, string $owner, string $repo, int $issueNumber, string $assignee)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->issueNumber = $issueNumber;
        $this->assignee = $assignee;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{issue_number}', '{assignee}'), array($this->owner, $this->repo, $this->issueNumber, $this->assignee), self::PATH));
    }
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : mixed
    {
        $code = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response if `assignee` can not be assigned to `issue_number`
                    **/
                    case 404:
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
