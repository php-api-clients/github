<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\CombinedCommitStatus;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetCombinedStatusForRef
{
    public const OPERATION_ID    = 'repos/get-combined-status-for-ref';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/commits/{ref}/status';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/commits/{ref}/status';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\Status $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo, string $ref, int $perPage = 30, int $page = 1): CombinedCommitStatus|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\GetCombinedStatusForRef($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $ref, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CombinedCommitStatus|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
