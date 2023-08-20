<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Client\GitHub\Schema\PagesHealthCheck;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetPagesHealthCheck
{
    public const OPERATION_ID    = 'repos/get-pages-health-check';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/pages/health';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/pages/health';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Pages\Health $hydrator)
    {
    }

    /** @return (Schema\PagesHealthCheck | Schema\EmptyObject | array{code: int}) */
    public function call(string $owner, string $repo): PagesHealthCheck|EmptyObject|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\GetPagesHealthCheck($this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PagesHealthCheck|EmptyObject|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
