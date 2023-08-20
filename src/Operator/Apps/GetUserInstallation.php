<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Apps;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\Installation;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetUserInstallation
{
    public const OPERATION_ID    = 'apps/get-user-installation';
    public const OPERATION_MATCH = 'GET /users/{username}/installation';
    private const METHOD         = 'GET';
    private const PATH           = '/users/{username}/installation';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Users\Username\Installation $hydrator)
    {
    }

    /** @return */
    public function call(string $username): Installation|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Apps\GetUserInstallation($this->responseSchemaValidator, $this->hydrator, $username);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Installation|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
