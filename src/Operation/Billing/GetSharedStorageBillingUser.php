<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Billing;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class GetSharedStorageBillingUser
{
    public const OPERATION_ID = 'billing/get-shared-storage-billing-user';
    public const OPERATION_MATCH = 'GET /users/{username}/settings/billing/shared-storage';
    private const METHOD = 'GET';
    private const PATH = '/users/{username}/settings/billing/shared-storage';
    /**The handle for the GitHub user account.**/
    private string $username;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Users\CbUsernameRcb\Settings\Billing\SharedStorage $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Users\CbUsernameRcb\Settings\Billing\SharedStorage $hydrator, string $username)
    {
        $this->username = $username;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{username}'), array($this->username), self::PATH));
    }
    /**
     * @return Schema\CombinedBillingUsage
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\CombinedBillingUsage
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\CombinedBillingUsage::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\CombinedBillingUsage::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
