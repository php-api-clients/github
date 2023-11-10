<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\SecurityAdvisories;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListOrgRepositoryAdvisories
{
    public const OPERATION_ID    = 'security-advisories/list-org-repository-advisories';
    public const OPERATION_MATCH = 'GET /orgs/{org}/security-advisories';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\SecurityAdvisories $hydrator)
    {
    }

    /** @return Observable<Schema\RepositoryAdvisory> */
    public function call(string $org, string $before, string $after, string $state, string $direction = 'desc', string $sort = 'created', int $perPage = 30): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\SecurityAdvisories\ListOrgRepositoryAdvisories($this->responseSchemaValidator, $this->hydrator, $org, $before, $after, $state, $direction, $sort, $perPage);
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
