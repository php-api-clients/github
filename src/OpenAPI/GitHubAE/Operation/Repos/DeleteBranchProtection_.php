<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos;

final class DeleteBranchProtection_
{
    private const OPERATION_ID = 'repos/delete-branch-protection';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The name of the branch. Cannot contain wildcard characters. To use wildcard characters in branch names, use [the GraphQL API](https://docs.github.com/github-ae@latest/graphql).**/
    private readonly string $branch;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, string $owner, string $repo, string $branch)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->owner = $owner;
        $this->repo = $repo;
        $this->branch = $branch;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{branch}'), array($this->owner, $this->repo, $this->branch), '/repos/{owner}/{repo}/branches/{branch}/protection'));
    }
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        $hydrator = new \WyriHaximus\Hydrator\Hydrator();
        switch ($response->getStatusCode()) {
            /**Response**/
            case 204:
                switch ($contentType) {
                }
                break;
            /**Forbidden**/
            case 403:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $hydrator->hydrate('\\ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\Schema\\BasicError', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
