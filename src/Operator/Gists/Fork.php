<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Gists;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\BaseGist;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class Fork
{
    public const OPERATION_ID    = 'gists/fork';
    public const OPERATION_MATCH = 'POST /gists/{gist_id}/forks';
    private const METHOD         = 'POST';
    private const PATH           = '/gists/{gist_id}/forks';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Gists\GistId\Forks $hydrator)
    {
    }

    /** @return (Schema\BaseGist | array{code: int}) */
    public function call(string $gistId): BaseGist|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Gists\Fork($this->responseSchemaValidator, $this->hydrator, $gistId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): BaseGist|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
