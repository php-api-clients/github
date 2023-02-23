<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Actions;

final class GetSelfHostedRunnerForRepo
{
    public const OPERATION_ID = 'actions/get-self-hosted-runner-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/runners/{runner_id}';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/actions/runners/{runner_id}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**Unique identifier of the self-hosted runner.**/
    private int $runner_id;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\CbRunnerIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\CbRunnerIdRcb $hydrator, string $owner, string $repo, int $runner_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->runner_id = $runner_id;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{runner_id}'), array($this->owner, $this->repo, $this->runner_id), self::PATH));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\Runner
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\Runner
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\Runner::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\Runner', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
