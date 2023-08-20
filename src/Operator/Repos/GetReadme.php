<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\ContentFile;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetReadme
{
    public const OPERATION_ID    = 'repos/get-readme';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/readme';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/readme';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Readme $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo, string $ref): ContentFile|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\GetReadme($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $ref);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ContentFile|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
