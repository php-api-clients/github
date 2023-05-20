<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class DeleteRepoVariable
{
    public const OPERATION_ID    = 'actions/delete-repo-variable';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/actions/variables/{name}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/actions/variables/{name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $owner, string $repo, string $name): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\DeleteRepoVariable($owner, $repo, $name);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
