<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Codespaces;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Codespace;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class StartForAuthenticatedUser
{
    public const OPERATION_ID    = 'codespaces/start-for-authenticated-user';
    public const OPERATION_MATCH = 'POST /user/codespaces/{codespace_name}/start';
    private const METHOD         = 'POST';
    private const PATH           = '/user/codespaces/{codespace_name}/start';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\User\Codespaces\CodespaceName\Start $hydrator)
    {
    }

    /** @return (Schema\Codespace | array{code: int}) */
    public function call(string $codespaceName): Codespace|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Codespaces\StartForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator, $codespaceName);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Codespace|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
