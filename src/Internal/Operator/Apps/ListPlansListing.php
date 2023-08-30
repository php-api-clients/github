<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Apps;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListPlansListing
{
    public const OPERATION_ID    = 'apps/list-plans';
    public const OPERATION_MATCH = 'LIST /marketplace_listing/plans';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\MarketplaceListing\Plans $hydrator)
    {
    }

    /** @return Observable<Schema\MarketplaceListingPlan> */
    public function call(int $perPage = 30, int $page = 1): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Apps\ListPlansListing($this->responseSchemaValidator, $this->hydrator, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
