<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Apps;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class GetSubscriptionPlanForAccountStubbed
{
    public const OPERATION_ID = 'apps/get-subscription-plan-for-account-stubbed';
    public const OPERATION_MATCH = 'GET /marketplace_listing/stubbed/accounts/{account_id}';
    private const METHOD = 'GET';
    private const PATH = '/marketplace_listing/stubbed/accounts/{account_id}';
    /**account_id parameter**/
    private int $accountId;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\MarketplaceListing\Stubbed\Accounts\CbAccountIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\MarketplaceListing\Stubbed\Accounts\CbAccountIdRcb $hydrator, int $accountId)
    {
        $this->accountId = $accountId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{account_id}'), array($this->accountId), self::PATH));
    }
    /**
     * @return Schema\MarketplacePurchase
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\MarketplacePurchase
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\MarketplacePurchase::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\MarketplacePurchase::class, $body);
                }
                break;
            /**Requires authentication**/
            case 401:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\BasicError(401, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
