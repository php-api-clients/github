<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Repos;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class DeleteAutolink
{
    public const OPERATION_ID    = 'repos/delete-autolink';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/autolinks/{autolink_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Autolinks\AutolinkId $hydrator)
    {
    }

    /** @return array{code:int} */
    public function call(string $owner, string $repo, int $autolinkId): array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Repos\DeleteAutolink($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $autolinkId);
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
