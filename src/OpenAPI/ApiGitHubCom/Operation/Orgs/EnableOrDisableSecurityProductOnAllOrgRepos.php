<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs;

final class EnableOrDisableSecurityProductOnAllOrgRepos
{
    private const OPERATION_ID = 'orgs/enable-or-disable-security-product-on-all-org-repos';
    public const OPERATION_MATCH = 'POST /orgs/{org}/{security_product}/{enablement}';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper $hydrator;
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The security feature to enable or disable.**/
    private string $security_product;
    /**The action to take.
    
    `enable_all` means to enable the specified security feature for all repositories in the organization.
    `disable_all` means to disable the specified security feature for all repositories in the organization.**/
    private string $enablement;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper $hydrator, string $org, string $security_product, string $enablement)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
        $this->org = $org;
        $this->security_product = $security_product;
        $this->enablement = $enablement;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('POST', \str_replace(array('{org}', '{security_product}', '{enablement}'), array($this->org, $this->security_product, $this->enablement), '/orgs/{org}/{security_product}/{enablement}'));
    }
    /**
     * @return int
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : int
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Action started**/
            case 204:
                return 204;
                break;
            /**The action could not be taken due to an in progress enablement, or a policy is preventing enablement**/
            case 422:
                return 422;
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
