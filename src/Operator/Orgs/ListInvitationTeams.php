<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Orgs;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListInvitationTeams
{
    public const OPERATION_ID    = 'orgs/list-invitation-teams';
    public const OPERATION_MATCH = 'GET /orgs/{org}/invitations/{invitation_id}/teams';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/invitations/{invitation_id}/teams';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Invitations\InvitationId\Teams $hydrator)
    {
    }

    /** @return PromiseInterface<mixed> **/
    public function call(string $org, int $invitationId, int $perPage = 30, int $page = 1): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Orgs\ListInvitationTeams($this->responseSchemaValidator, $this->hydrator, $org, $invitationId, $perPage, $page);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }
}
