<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos;

final class RemoveTeamAccessRestrictions_
{
    private const OPERATION_ID = 'repos/remove-team-access-restrictions';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The name of the branch.**/
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
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C9317Dd2525342858Be77Bcad419Aac90::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{branch}'), array($this->owner, $this->repo, $this->branch), '/repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams'), array('Content-Type' => 'application/json'), json_encode($data));
    }
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B|\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        $hydrator = new \WyriHaximus\Hydrator\Hydrator();
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE11926Db2C7F041Ef537Eab6D400701B::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $hydrator->hydrate('\\ApiClients\\Client\\Github\\OpenAPI\\GitHubEnterprise\\v3_1\\Schema\\Unknown\\CE11926Db2C7F041Ef537Eab6D400701B', $body);
                }
                break;
            /**Validation failed**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ValidationError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $hydrator->hydrate('\\ApiClients\\Client\\Github\\OpenAPI\\GitHubEnterprise\\v3_1\\Schema\\ValidationError', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}