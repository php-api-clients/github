<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\SecurityAdvisories;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListRepositoryAdvisories
{
    public const OPERATION_ID    = 'security-advisories/list-repository-advisories';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/security-advisories';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/security-advisories';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories $hydrator)
    {
    }

    /** @return iterable<Schema\RepositoryAdvisory> */
    public function call(string $owner, string $repo, string $before, string $after, string $state, string $direction = 'desc', string $sort = 'created', int $perPage = 30): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Operation\SecurityAdvisories\ListRepositoryAdvisories($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $before, $after, $state, $direction, $sort, $perPage);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
