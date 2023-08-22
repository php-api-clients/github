<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Reactions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListForReleaseListing
{
    public const OPERATION_ID    = 'reactions/list-for-release';
    public const OPERATION_MATCH = 'LIST /repos/{owner}/{repo}/releases/{release_id}/reactions';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/releases/{release_id}/reactions';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Reactions $hydrator)
    {
    }

    /** @return iterable<Schema\Reaction> */
    public function call(string $owner, string $repo, int $releaseId, string $content, int $perPage = 30, int $page = 1): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Reactions\ListForReleaseListing($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $releaseId, $content, $perPage, $page);
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
