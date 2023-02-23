<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Codespaces;

final class GetRepoSecret
{
    public const OPERATION_ID = 'codespaces/get-repo-secret';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/codespaces/secrets/{secret_name}';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/codespaces/secrets/{secret_name}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The name of the secret.**/
    private string $secret_name;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets\CbSecretNameRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets\CbSecretNameRcb $hydrator, string $owner, string $repo, string $secret_name)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->secret_name = $secret_name;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{secret_name}'), array($this->owner, $this->repo, $this->secret_name), self::PATH));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\RepoCodespacesSecret
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\RepoCodespacesSecret
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\RepoCodespacesSecret::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\RepoCodespacesSecret', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
