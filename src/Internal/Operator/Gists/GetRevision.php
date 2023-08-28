<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Gists;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\GistSimple;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetRevision
{
    public const OPERATION_ID    = 'gists/get-revision';
    public const OPERATION_MATCH = 'GET /gists/{gist_id}/{sha}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Gists\GistId\Sha $hydrator)
    {
    }

    /** @return Schema\GistSimple */
    public function call(string $gistId, string $sha): GistSimple|array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Gists\GetRevision($this->responseSchemaValidator, $this->hydrator, $gistId, $sha);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GistSimple|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
