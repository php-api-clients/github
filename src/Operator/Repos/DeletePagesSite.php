<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class DeletePagesSite
{
    public const OPERATION_ID    = 'repos/delete-pages-site';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/pages';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/pages';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Pages $hydrator)
    {
    }

    /** @return array{code: int} */
    public function call(string $owner, string $repo): array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\DeletePagesSite($this->responseSchemaValidator, $this->hydrator, $owner, $repo);
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
