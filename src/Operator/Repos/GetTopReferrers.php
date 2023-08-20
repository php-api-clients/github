<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetTopReferrers
{
    public const OPERATION_ID    = 'repos/get-top-referrers';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/traffic/popular/referrers';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/traffic/popular/referrers';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Traffic\Popular\Referrers $hydrator)
    {
    }

    /** @return iterable<Schema\ReferrerTraffic> */
    public function call(string $owner, string $repo): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\GetTopReferrers($this->responseSchemaValidator, $this->hydrator, $owner, $repo);
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
