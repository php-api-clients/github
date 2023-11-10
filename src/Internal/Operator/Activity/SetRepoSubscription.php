<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Activity;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\RepositorySubscription;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class SetRepoSubscription
{
    public const OPERATION_ID    = 'activity/set-repo-subscription';
    public const OPERATION_MATCH = 'PUT /repos/{owner}/{repo}/subscription';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Subscription $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo, array $params): RepositorySubscription
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Activity\SetRepoSubscription($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): RepositorySubscription {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
