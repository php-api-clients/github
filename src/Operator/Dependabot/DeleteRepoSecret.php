<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Dependabot;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class DeleteRepoSecret
{
    public const OPERATION_ID    = 'dependabot/delete-repo-secret';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/dependabot/secrets/{secret_name}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/dependabot/secrets/{secret_name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $owner, string $repo, string $secretName): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Dependabot\DeleteRepoSecret($owner, $repo, $secretName);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
