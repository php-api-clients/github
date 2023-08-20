<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Codespaces;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Operations\Codespaces\RepoMachinesForAuthenticatedUser\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class RepoMachinesForAuthenticatedUser
{
    public const OPERATION_ID    = 'codespaces/repo-machines-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/codespaces/machines';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/codespaces/machines';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Codespaces\Machines $hydrator)
    {
    }

    /** @return (Schema\Operations\Codespaces\RepoMachinesForAuthenticatedUser\Response\ApplicationJson\Ok | array{code: int}) */
    public function call(string $owner, string $repo, string $location, string $clientIp): Ok|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Codespaces\RepoMachinesForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $location, $clientIp);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Ok|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
