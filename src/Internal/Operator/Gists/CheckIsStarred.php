<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Gists;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class CheckIsStarred
{
    public const OPERATION_ID    = 'gists/check-is-starred';
    public const OPERATION_MATCH = 'GET /gists/{gist_id}/star';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Gists\GistId\Star $hydrator)
    {
    }

    /** @return array{code:int} */
    public function call(string $gistId): array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Gists\CheckIsStarred($this->responseSchemaValidator, $this->hydrator, $gistId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
