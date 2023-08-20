<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\AuthenticationToken;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class CreateRegistrationTokenForRepo
{
    public const OPERATION_ID    = 'actions/create-registration-token-for-repo';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/actions/runners/registration-token';
    private const METHOD         = 'POST';
    private const PATH           = '/repos/{owner}/{repo}/actions/runners/registration-token';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RegistrationToken $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo): AuthenticationToken|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\CreateRegistrationTokenForRepo($this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): AuthenticationToken|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
