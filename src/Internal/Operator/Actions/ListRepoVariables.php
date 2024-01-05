<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Actions;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoVariables\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListRepoVariables
{
    public const OPERATION_ID    = 'actions/list-repo-variables';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/variables';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Variables $hydrator)
    {
    }

    public function call(string $owner, string $repo, int $perPage = 10, int $page = 1): Json
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Actions\ListRepoVariables($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $perPage, $page);
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
