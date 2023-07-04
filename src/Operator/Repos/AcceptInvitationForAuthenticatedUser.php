<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class AcceptInvitationForAuthenticatedUser
{
    public const OPERATION_ID    = 'repos/accept-invitation-for-authenticated-user';
    public const OPERATION_MATCH = 'PATCH /user/repository_invitations/{invitation_id}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/user/repository_invitations/{invitation_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\RepositoryInvitations\InvitationId $hydrator)
    {
    }

    /** @return PromiseInterface<array> **/
    public function call(int $invitationId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\AcceptInvitationForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $invitationId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
