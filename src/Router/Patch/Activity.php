<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Router\Patch;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final class Activity
{
    /**
     * @var array<class-string, \EventSauce\ObjectHydrator\ObjectMapper>
     */
    private array $hydrator = array();
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\GitHub\Hydrators $hydrators;
    private readonly \React\Http\Browser $browser;
    private readonly \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\GitHub\Hydrators $hydrators, \React\Http\Browser $browser, \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators = $hydrators;
        $this->browser = $browser;
        $this->authentication = $authentication;
    }
    public function markThreadAsRead(array $params)
    {
        $arguments = array();
        if (array_key_exists('thread_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: thread_id');
        }
        $arguments['thread_id'] = $params['thread_id'];
        unset($params['thread_id']);
        if (\array_key_exists(Hydrator\Operation\Notifications\Threads\CbThreadIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Notifications\Threads\CbThreadIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀CbThreadIdRcb();
        }
        $operation = new Operation\Activity\MarkThreadAsRead($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Notifications\Threads\CbThreadIdRcb::class], $arguments['thread_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
}
