<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Git;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Blob;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetBlob
{
    public const OPERATION_ID    = 'git/get-blob';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/git/blobs/{file_sha}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/git/blobs/{file_sha}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Git\Blobs\FileSha $hydrator)
    {
    }

    /**
     * @return PromiseInterface<Blob>
     **/
    public function call(string $owner, string $repo, string $fileSha): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Git\GetBlob($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $fileSha);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Blob {
            return $operation->createResponse($response);
        });
    }
}
