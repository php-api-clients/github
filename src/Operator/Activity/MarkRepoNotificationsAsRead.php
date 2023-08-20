<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Activity;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class MarkRepoNotificationsAsRead
{
    public const OPERATION_ID    = 'activity/mark-repo-notifications-as-read';
    public const OPERATION_MATCH = 'PUT /repos/{owner}/{repo}/notifications';
    private const METHOD         = 'PUT';
    private const PATH           = '/repos/{owner}/{repo}/notifications';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Notifications $hydrator)
    {
    }

    /** @return (Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted | array{code: int}) */
    public function call(string $owner, string $repo, array $params): Accepted|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Activity\MarkRepoNotificationsAsRead($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Accepted|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
