<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Codespaces;

final class ListSelectedReposForOrgSecret
{
    public const OPERATION_ID = 'codespaces/list-selected-repos-for-org-secret';
    public const OPERATION_MATCH = 'GET /orgs/{org}/codespaces/secrets/{secret_name}/repositories';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/codespaces/secrets/{secret_name}/repositories';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The name of the secret.**/
    private string $secret_name;
    /**Page number of the results to fetch.**/
    private int $page;
    /**The number of results per page (max 100).**/
    private int $per_page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb\Repositories $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb\Repositories $hydrator, string $org, string $secret_name, int $page = 1, int $per_page = 30)
    {
        $this->org = $org;
        $this->secret_name = $secret_name;
        $this->page = $page;
        $this->per_page = $per_page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{secret_name}', '{page}', '{per_page}'), array($this->org, $this->secret_name, $this->page, $this->per_page), self::PATH . '?page={page}&per_page={per_page}'));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\Operation\Actions\ListSelectedReposForOrgSecret\Response\Applicationjson\H200|\ApiClients\Client\Github\Schema\BasicError
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\Operation\Actions\ListSelectedReposForOrgSecret\Response\Applicationjson\H200|\ApiClients\Client\Github\Schema\BasicError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Resource not found**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\Operation\Actions\ListSelectedReposForOrgSecret\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListSelectedReposForOrgSecret\\Response\\Applicationjson\\H200', $body);
                }
                break;
            /**Resource not found**/
            case 404:
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
