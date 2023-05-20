<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class RemoveCollaborator
{
    public const OPERATION_ID    = 'repos/remove-collaborator';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/collaborators/{username}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/collaborators/{username}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $owner, string $repo, string $username): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\RemoveCollaborator($owner, $repo, $username);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
