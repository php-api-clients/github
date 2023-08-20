<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Release;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetRelease
{
    public const OPERATION_ID    = 'repos/get-release';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/releases/{release_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/releases/{release_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId $hydrator)
    {
    }

    /** @return (Schema\Release | array{code: int}) */
    public function call(string $owner, string $repo, int $releaseId): Release|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\GetRelease($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $releaseId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Release|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
