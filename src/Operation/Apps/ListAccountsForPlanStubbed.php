<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Apps;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class ListAccountsForPlanStubbed
{
    public const OPERATION_ID = 'apps/list-accounts-for-plan-stubbed';
    public const OPERATION_MATCH = 'GET /marketplace_listing/stubbed/plans/{plan_id}/accounts';
    private const METHOD = 'GET';
    private const PATH = '/marketplace_listing/stubbed/plans/{plan_id}/accounts';
    /**The unique identifier of the plan.**/
    private int $planId;
    /**To return the oldest accounts first, set to `asc`. Ignored without the `sort` parameter.**/
    private string $direction;
    /**The property to sort the results by.**/
    private string $sort;
    /**The number of results per page (max 100).**/
    private int $perPage;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\MarketplaceListing\Stubbed\Plans\CbPlanIdRcb\Accounts $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\MarketplaceListing\Stubbed\Plans\CbPlanIdRcb\Accounts $hydrator, int $planId, string $direction, string $sort = 'created', int $perPage = 30, int $page = 1)
    {
        $this->planId = $planId;
        $this->direction = $direction;
        $this->sort = $sort;
        $this->perPage = $perPage;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{plan_id}', '{direction}', '{sort}', '{per_page}', '{page}'), array($this->planId, $this->direction, $this->sort, $this->perPage, $this->page), self::PATH . '?direction={direction}&sort={sort}&perPage={per_page}&page={page}'));
    }
    /**
     * @return \Rx\Observable<Schema\MarketplacePurchase>
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, \cebe\openapi\Reader::readFromJson(Schema\MarketplacePurchase::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\MarketplacePurchase {
                            return $this->hydrator->hydrateObject(Schema\MarketplacePurchase::class, $body);
                        });
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
