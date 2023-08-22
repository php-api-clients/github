<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Gitignore;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetAllTemplates
{
    public const OPERATION_ID    = 'gitignore/get-all-templates';
    public const OPERATION_MATCH = 'GET /gitignore/templates';
    private const METHOD         = 'GET';
    private const PATH           = '/gitignore/templates';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Gitignore\Templates $hydrator)
    {
    }

    /** @return (Observable<string> | array{code: int}) */
    public function call(): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Gitignore\GetAllTemplates($this->responseSchemaValidator, $this->hydrator);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
