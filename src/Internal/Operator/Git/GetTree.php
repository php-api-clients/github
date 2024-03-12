<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Git;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\GitTree;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetTree
{
    public const OPERATION_ID    = 'git/get-tree';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/git/trees/{tree_sha}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Trees\TreeSha $hydrator)
    {
    }

    public function call(string $owner, string $repo, string $treeSha, string $recursive): GitTree
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Git\GetTree($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $treeSha, $recursive);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GitTree {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
