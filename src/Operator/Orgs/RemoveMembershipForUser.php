<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Orgs;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class RemoveMembershipForUser
{
    public const OPERATION_ID    = 'orgs/remove-membership-for-user';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/memberships/{username}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/memberships/{username}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Memberships\Username $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $org, string $username): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Orgs\RemoveMembershipForUser($this->responseSchemaValidator, $this->hydrator, $org, $username);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
