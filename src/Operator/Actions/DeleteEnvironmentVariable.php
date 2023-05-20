<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class DeleteEnvironmentVariable
{
    public const OPERATION_ID    = 'actions/delete-environment-variable';
    public const OPERATION_MATCH = 'DELETE /repositories/{repository_id}/environments/{environment_name}/variables/{name}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repositories/{repository_id}/environments/{environment_name}/variables/{name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(int $repositoryId, string $name, string $environmentName): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\DeleteEnvironmentVariable($repositoryId, $name, $environmentName);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
