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

final readonly class DeleteTagProtection
{
    public const OPERATION_ID    = 'repos/delete-tag-protection';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/tags/protection/{tag_protection_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Tags\Protection\TagProtectionId $hydrator)
    {
    }

    /** @return array{code:int} */
    public function call(string $owner, string $repo, int $tagProtectionId): array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\DeleteTagProtection($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $tagProtectionId);
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
