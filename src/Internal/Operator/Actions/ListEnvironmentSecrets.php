<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Actions;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\Operations\Actions\ListEnvironmentSecrets\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListEnvironmentSecrets
{
    public const OPERATION_ID    = 'actions/list-environment-secrets';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/environments/{environment_name}/secrets';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Secrets $hydrator)
    {
    }

    public function call(string $owner, string $repo, string $environmentName, int $perPage = 30, int $page = 1): Json
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Actions\ListEnvironmentSecrets($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $environmentName, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Json {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
