<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Orgs;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListMembershipsForAuthenticatedUserListing
{
    public const OPERATION_ID    = 'orgs/list-memberships-for-authenticated-user';
    public const OPERATION_MATCH = 'LIST /user/memberships/orgs';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\User\Memberships\Orgs $hydrator)
    {
    }

    /** @return Observable<Schema\OrgMembership>|WithoutBody */
    public function call(string $state, int $perPage = 30, int $page = 1): iterable|WithoutBody
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Orgs\ListMembershipsForAuthenticatedUserListing($this->responseSchemaValidator, $this->hydrator, $state, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
