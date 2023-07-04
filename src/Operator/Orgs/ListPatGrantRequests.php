<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Orgs;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListPatGrantRequests
{
    public const OPERATION_ID    = 'orgs/list-pat-grant-requests';
    public const OPERATION_MATCH = 'GET /orgs/{org}/personal-access-token-requests';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/personal-access-token-requests';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests $hydrator)
    {
    }

    /** @return PromiseInterface<mixed> **/
    public function call(string $org, array $owner, string $repository, string $permission, string $lastUsedBefore, string $lastUsedAfter, int $perPage = 30, int $page = 1, string $sort = 'created_at', string $direction = 'desc'): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Orgs\ListPatGrantRequests($this->responseSchemaValidator, $this->hydrator, $org, $owner, $repository, $permission, $lastUsedBefore, $lastUsedAfter, $perPage, $page, $sort, $direction);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }
}
