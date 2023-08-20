<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\ContentDirectory;
use ApiClients\Client\GitHub\Schema\ContentFile;
use ApiClients\Client\GitHub\Schema\ContentSubmodule;
use ApiClients\Client\GitHub\Schema\ContentSymlink;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetContent
{
    public const OPERATION_ID    = 'repos/get-content';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/contents/{path}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/contents/{path}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Contents\Path $hydrator)
    {
    }

    /** @return (Schema\ContentDirectory | Schema\ContentFile | Schema\ContentSymlink | Schema\ContentSubmodule | array{code: int}) */
    public function call(string $owner, string $repo, string $path, string $ref): ContentDirectory|ContentFile|ContentSymlink|ContentSubmodule|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\GetContent($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $path, $ref);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ContentDirectory|ContentFile|ContentSymlink|ContentSubmodule|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
