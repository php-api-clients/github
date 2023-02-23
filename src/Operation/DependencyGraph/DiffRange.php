<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\DependencyGraph;

final class DiffRange
{
    public const OPERATION_ID = 'dependency-graph/diff-range';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/dependency-graph/compare/{basehead}';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/dependency-graph/compare/{basehead}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The base and head Git revisions to compare. The Git revisions will be resolved to commit SHAs. Named revisions will be resolved to their corresponding HEAD commits, and an appropriate merge base will be determined. This parameter expects the format `{base}...{head}`.**/
    private string $basehead;
    /**The full path, relative to the repository root, of the dependency manifest file.**/
    private string $name;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\DependencyGraph\Compare\CbBaseheadRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\DependencyGraph\Compare\CbBaseheadRcb $hydrator, string $owner, string $repo, string $basehead, string $name)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->basehead = $basehead;
        $this->name = $name;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{basehead}', '{name}'), array($this->owner, $this->repo, $this->basehead, $this->name), self::PATH . '?name={name}'));
    }
    /**
     * @return \Rx\Observable<\ApiClients\Client\Github\Schema\DependencyGraphDiff>|\ApiClients\Client\Github\Schema\BasicError
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable|\ApiClients\Client\Github\Schema\BasicError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Forbidden**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\DependencyGraphDiff::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : \ApiClients\Client\Github\Schema\DependencyGraphDiff {
                            return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\DependencyGraphDiff', $body);
                        });
                }
                break;
            /**Forbidden**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\BasicError', $body);
                }
                break;
            /**Forbidden**/
            case 403:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\BasicError', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
