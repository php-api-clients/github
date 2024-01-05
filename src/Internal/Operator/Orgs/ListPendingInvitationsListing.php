<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Orgs;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListPendingInvitationsListing
{
    public const OPERATION_ID    = 'orgs/list-pending-invitations';
    public const OPERATION_MATCH = 'LIST /orgs/{org}/invitations';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Invitations $hydrator)
    {
    }

    /** @return iterable<int,Schema\OrganizationInvitation> */
    public function call(string $org, int $perPage = 30, int $page = 1, string $role = 'all', string $invitationSource = 'all'): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Orgs\ListPendingInvitationsListing($this->responseSchemaValidator, $this->hydrator, $org, $perPage, $page, $role, $invitationSource);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
