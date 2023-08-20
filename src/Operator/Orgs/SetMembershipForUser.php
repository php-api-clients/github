<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Orgs;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\OrgMembership;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class SetMembershipForUser
{
    public const OPERATION_ID    = 'orgs/set-membership-for-user';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/memberships/{username}';
    private const METHOD         = 'PUT';
    private const PATH           = '/orgs/{org}/memberships/{username}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Memberships\Username $hydrator)
    {
    }

    /** @return */
    public function call(string $org, string $username, array $params): OrgMembership|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Orgs\SetMembershipForUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $username);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): OrgMembership|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
