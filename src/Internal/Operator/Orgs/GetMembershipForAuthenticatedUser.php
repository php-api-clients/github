<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Orgs;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\OrgMembership;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetMembershipForAuthenticatedUser
{
    public const OPERATION_ID    = 'orgs/get-membership-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/memberships/orgs/{org}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\User\Memberships\Orgs\Org $hydrator)
    {
    }

    /** @return */
    public function call(string $org): OrgMembership|array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Orgs\GetMembershipForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $org);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): OrgMembership|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
