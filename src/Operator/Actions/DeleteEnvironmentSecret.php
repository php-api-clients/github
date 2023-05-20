<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class DeleteEnvironmentSecret
{
    public const OPERATION_ID    = 'actions/delete-environment-secret';
    public const OPERATION_MATCH = 'DELETE /repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(int $repositoryId, string $environmentName, string $secretName): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\DeleteEnvironmentSecret($repositoryId, $environmentName, $secretName);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
