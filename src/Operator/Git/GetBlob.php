<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Git;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Blob;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetBlob
{
    public const OPERATION_ID    = 'git/get-blob';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/git/blobs/{file_sha}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/git/blobs/{file_sha}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Git\Blobs\FileSha $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo, string $fileSha): Blob|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Git\GetBlob($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $fileSha);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Blob|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
