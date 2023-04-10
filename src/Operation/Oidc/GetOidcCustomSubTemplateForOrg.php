<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Oidc;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class GetOidcCustomSubTemplateForOrg
{
    public const OPERATION_ID = 'oidc/get-oidc-custom-sub-template-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/oidc/customization/sub';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/actions/oidc/customization/sub';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Actions\Oidc\Customization\Sub $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Actions\Oidc\Customization\Sub $hydrator, string $org)
    {
        $this->org = $org;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}'), array($this->org), self::PATH));
    }
    /**
     * @return Schema\OidcCustomSub
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\OidcCustomSub
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**A JSON serialized template for OIDC subject claim customization**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\OidcCustomSub::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\OidcCustomSub::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
