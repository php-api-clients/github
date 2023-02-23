<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Dependabot;

final class GetRepoPublicKey
{
    public const OPERATION_ID = 'dependabot/get-repo-public-key';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/dependabot/secrets/public-key';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/dependabot/secrets/public-key';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets\PublicKey $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets\PublicKey $hydrator, string $owner, string $repo)
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
     * @return \ApiClients\Client\Github\Schema\DependabotPublicKey
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\DependabotPublicKey
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\DependabotPublicKey::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\DependabotPublicKey', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
