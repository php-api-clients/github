<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Apps;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;
use Throwable;

use function explode;
use function json_decode;
use function str_replace;

final class ListAccountsForPlanStubbed
{
    public const OPERATION_ID    = 'apps/list-accounts-for-plan-stubbed';
    public const OPERATION_MATCH = 'GET /marketplace_listing/stubbed/plans/{plan_id}/accounts';
    private const METHOD         = 'GET';
    private const PATH           = '/marketplace_listing/stubbed/plans/{plan_id}/accounts';
    /**The unique identifier of the plan. **/
    private int $planId;
    /**To return the oldest accounts first, set to `asc`. Ignored without the `sort` parameter. **/
    private string $direction;
    /**The property to sort the results by. **/
    private string $sort;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\MarketplaceListing\Stubbed\Plans\PlanId\Accounts $hydrator, int $planId, string $direction, string $sort = 'created', int $perPage = 30, int $page = 1)
    {
        $this->planId    = $planId;
        $this->direction = $direction;
        $this->sort      = $sort;
        $this->perPage   = $perPage;
        $this->page      = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{plan_id}', '{direction}', '{sort}', '{per_page}', '{page}'], [$this->planId, $this->direction, $this->sort, $this->perPage, $this->page], self::PATH . '?direction={direction}&sort={sort}&per_page={per_page}&page={page}'));
    }

    /** @return Observable<Schema\MarketplacePurchase> */
    public function createResponse(ResponseInterface $response): Observable
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                     **/
                    case 200:
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\MarketplacePurchase {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\MarketplacePurchase::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrators->hydrateObject(Schema\MarketplacePurchase::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                    /**
                     * Requires authentication
                     **/

                    case 401:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(401, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
