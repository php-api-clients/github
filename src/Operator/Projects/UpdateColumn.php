<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Projects;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\ProjectColumn;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UpdateColumn
{
    public const OPERATION_ID    = 'projects/update-column';
    public const OPERATION_MATCH = 'PATCH /projects/columns/{column_id}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/projects/columns/{column_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Projects\Columns\ColumnId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(ProjectColumn|array)>
     **/
    public function call(int $columnId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Projects\UpdateColumn($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $columnId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ProjectColumn|array {
            return $operation->createResponse($response);
        });
    }
}
