<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Codespaces;

final class GetOrgSecret
{
    public const OPERATION_ID = 'codespaces/get-org-secret';
    public const OPERATION_MATCH = 'GET /orgs/{org}/codespaces/secrets/{secret_name}';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/codespaces/secrets/{secret_name}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The name of the secret.**/
    private string $secret_name;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb $hydrator, string $org, string $secret_name)
    {
        $this->org = $org;
        $this->secret_name = $secret_name;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{secret_name}'), array($this->org, $this->secret_name), self::PATH));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\CodespacesOrgSecret
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\CodespacesOrgSecret
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\CodespacesOrgSecret::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\CodespacesOrgSecret', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
