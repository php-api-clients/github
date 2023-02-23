<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Actions;

final class GetRepoVariable
{
    public const OPERATION_ID = 'actions/get-repo-variable';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/variables/{name}';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/actions/variables/{name}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The name of the variable.**/
    private string $name;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Variables\CbNameRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Variables\CbNameRcb $hydrator, string $owner, string $repo, string $name)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->name = $name;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{name}'), array($this->owner, $this->repo, $this->name), self::PATH));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\ActionsVariable
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\ActionsVariable
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\ActionsVariable::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\ActionsVariable', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
