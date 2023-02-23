<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Repos;

final class RedeliverWebhookDelivery
{
    public const OPERATION_ID = 'repos/redeliver-webhook-delivery';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/hooks/{hook_id}/deliveries/{delivery_id}/attempts';
    private const METHOD = 'POST';
    private const PATH = '/repos/{owner}/{repo}/hooks/{hook_id}/deliveries/{delivery_id}/attempts';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The unique identifier of the hook.**/
    private int $hook_id;
    private int $delivery_id;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb\Attempts $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb\Attempts $hydrator, string $owner, string $repo, int $hook_id, int $delivery_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->hook_id = $hook_id;
        $this->delivery_id = $delivery_id;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{hook_id}', '{delivery_id}'), array($this->owner, $this->repo, $this->hook_id, $this->delivery_id), self::PATH));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Dependencies|\ApiClients\Client\Github\Schema\BasicError|\ApiClients\Client\Github\Schema\ScimError|\ApiClients\Client\Github\Schema\ValidationError
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Dependencies|\ApiClients\Client\Github\Schema\BasicError|\ApiClients\Client\Github\Schema\ScimError|\ApiClients\Client\Github\Schema\ValidationError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Validation failed, or the endpoint has been spammed.**/
            case 202:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\WebhookPackagePublished\Package\PackageVersion\NpmMetadata\Dependencies::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\Dependencies', $body);
                }
                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 400:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\BasicError', $body);
                    case 'application/scim+json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\ScimError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\ScimError', $body);
                }
                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\ValidationError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\ValidationError', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
