<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Orgs;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListPatGrants
{
    public const OPERATION_ID    = 'orgs/list-pat-grants';
    public const OPERATION_MATCH = 'GET /organizations/{org}/personal-access-tokens';
    private const METHOD         = 'GET';
    private const PATH           = '/organizations/{org}/personal-access-tokens';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Organizations\Org\PersonalAccessTokens $hydrator)
    {
    }

    /**
     * @return PromiseInterface<mixed>
     **/
    public function call(string $org, array $owner, string $repository, string $permission, string $lastUsedBefore, string $lastUsedAfter, int $perPage = 30, int $page = 1, string $sort = 'created_at', string $direction = 'desc'): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Orgs\ListPatGrants($this->responseSchemaValidator, $this->hydrator, $org, $owner, $repository, $permission, $lastUsedBefore, $lastUsedAfter, $perPage, $page, $sort, $direction);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }
}
