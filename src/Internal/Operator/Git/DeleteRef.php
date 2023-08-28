<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Git;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class DeleteRef
{
    public const OPERATION_ID    = 'git/delete-ref';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/git/refs/{ref}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Refs\Ref $hydrator)
    {
    }

    /** @return array{code:int} */
    public function call(string $owner, string $repo, string $ref): array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Git\DeleteRef($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $ref);
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
