<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Actions;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class UpdateRepoVariable
{
    public const OPERATION_ID    = 'actions/update-repo-variable';
    public const OPERATION_MATCH = 'PATCH /repos/{owner}/{repo}/actions/variables/{name}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/repos/{owner}/{repo}/actions/variables/{name}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator)
    {
    }

    /** @return array{code: int} */
    public function call(string $owner, string $repo, string $name, array $params): array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Actions\UpdateRepoVariable($this->requestSchemaValidator, $owner, $repo, $name);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
