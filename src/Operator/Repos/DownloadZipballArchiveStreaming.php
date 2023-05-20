<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;
use Rx\Observable;

final readonly class DownloadZipballArchiveStreaming
{
    public const OPERATION_ID    = 'repos/download-zipball-archive';
    public const OPERATION_MATCH = 'STREAM /repos/{owner}/{repo}/zipball/{ref}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/zipball/{ref}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /**
     * @return PromiseInterface<Observable>
     **/
    public function call(string $owner, string $repo, string $ref): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\DownloadZipballArchiveStreaming($this->browser, $owner, $repo, $ref);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        });
    }
}
