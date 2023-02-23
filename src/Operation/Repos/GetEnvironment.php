<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Repos;

final class GetEnvironment
{
    public const OPERATION_ID = 'repos/get-environment';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/environments/{environment_name}';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/environments/{environment_name}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The name of the environment.**/
    private string $environment_name;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb $hydrator, string $owner, string $repo, string $environment_name)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->environment_name = $environment_name;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{environment_name}'), array($this->owner, $this->repo, $this->environment_name), self::PATH));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\Environment
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\Environment
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\Environment::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\Environment', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
