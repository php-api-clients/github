<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Repos;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class ListDeployments
{
    public const OPERATION_ID = 'repos/list-deployments';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/deployments';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/deployments';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The SHA recorded at creation time.**/
    private string $sha;
    /**The name of the ref. This can be a branch, tag, or SHA.**/
    private string $ref;
    /**The name of the task for the deployment (e.g., `deploy` or `deploy:migrations`).**/
    private string $task;
    /**The name of the environment that was deployed to (e.g., `staging` or `production`).**/
    private string|null $environment;
    /**The number of results per page (max 100).**/
    private int $perPage;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments $hydrator, string $owner, string $repo, string $sha = 'none', string $ref = 'none', string $task = 'none', string|null $environment = 'none', int $perPage = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->sha = $sha;
        $this->ref = $ref;
        $this->task = $task;
        $this->environment = $environment;
        $this->perPage = $perPage;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{sha}', '{ref}', '{task}', '{environment}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->sha, $this->ref, $this->task, $this->environment, $this->perPage, $this->page), self::PATH . '?sha={sha}&ref={ref}&task={task}&environment={environment}&perPage={per_page}&page={page}'));
    }
    /**
     * @return \Rx\Observable<Schema\Deployment>
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
                            $this->responseSchemaValidator->validate($bodyItem, \cebe\openapi\Reader::readFromJson(Schema\Deployment::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\Deployment {
                            return $this->hydrator->hydrateObject(Schema\Deployment::class, $body);
                        });
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
