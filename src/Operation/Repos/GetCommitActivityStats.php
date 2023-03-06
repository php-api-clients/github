<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class GetCommitActivityStats
{
    public const OPERATION_ID = 'repos/get-commit-activity-stats';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/stats/commit_activity';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/stats/commit_activity';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\CommitActivity $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\CommitActivity $hydrator, string $owner, string $repo)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}'), array($this->owner, $this->repo), self::PATH));
    }
    /**
     * @return \Rx\Observable<Schema\CommitActivity>|Schema\WebhookDeploymentStatusCreated\Deployment\Payload
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable|Schema\WebhookDeploymentStatusCreated\Deployment\Payload
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Accepted**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\CommitActivity::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\CommitActivity {
                            return $this->hydrator->hydrateObject(Schema\CommitActivity::class, $body);
                        });
                }
                break;
            /**Accepted**/
            case 202:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\WebhookDeploymentStatusCreated\Deployment\Payload::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\WebhookDeploymentStatusCreated\Deployment\Payload::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
