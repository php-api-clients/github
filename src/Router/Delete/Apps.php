<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Router\Delete;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final class Apps
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
    public function deleteInstallation(array $params)
    {
        $arguments = array();
        if (array_key_exists('installation_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: installation_id');
        }
        $arguments['installation_id'] = $params['installation_id'];
        unset($params['installation_id']);
        if (\array_key_exists(Hydrator\Operation\App\Installations\CbInstallationIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\App\Installations\CbInstallationIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀CbInstallationIdRcb();
        }
        $operation = new Operation\Apps\DeleteInstallation($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App\Installations\CbInstallationIdRcb::class], $arguments['installation_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
    public function deleteAuthorization(array $params)
    {
        $arguments = array();
        if (array_key_exists('client_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: client_id');
        }
        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
        if (\array_key_exists(Hydrator\Operation\Applications\CbClientIdRcb\Grant::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Applications\CbClientIdRcb\Grant::class] = $this->hydrators->getObjectMapperOperation🌀Applications🌀CbClientIdRcb🌀Grant();
        }
        $operation = new Operation\Apps\DeleteAuthorization($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Applications\CbClientIdRcb\Grant::class], $arguments['client_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
    public function deleteToken(array $params)
    {
        $arguments = array();
        if (array_key_exists('client_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: client_id');
        }
        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
        if (\array_key_exists(Hydrator\Operation\Applications\CbClientIdRcb\Token::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Applications\CbClientIdRcb\Token::class] = $this->hydrators->getObjectMapperOperation🌀Applications🌀CbClientIdRcb🌀Token();
        }
        $operation = new Operation\Apps\DeleteToken($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Applications\CbClientIdRcb\Token::class], $arguments['client_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
    public function unsuspendInstallation(array $params)
    {
        $arguments = array();
        if (array_key_exists('installation_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: installation_id');
        }
        $arguments['installation_id'] = $params['installation_id'];
        unset($params['installation_id']);
        if (\array_key_exists(Hydrator\Operation\App\Installations\CbInstallationIdRcb\Suspended::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\App\Installations\CbInstallationIdRcb\Suspended::class] = $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀CbInstallationIdRcb🌀Suspended();
        }
        $operation = new Operation\Apps\UnsuspendInstallation($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App\Installations\CbInstallationIdRcb\Suspended::class], $arguments['installation_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
    public function revokeInstallationAccessToken(array $params)
    {
        $arguments = array();
        $operation = new Operation\Apps\RevokeInstallationAccessToken();
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Psr\Http\Message\ResponseInterface {
            return $operation->createResponse($response);
        });
    }
    public function removeRepoFromInstallationForAuthenticatedUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('installation_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: installation_id');
        }
        $arguments['installation_id'] = $params['installation_id'];
        unset($params['installation_id']);
        if (array_key_exists('repository_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: repository_id');
        }
        $arguments['repository_id'] = $params['repository_id'];
        unset($params['repository_id']);
        if (\array_key_exists(Hydrator\Operation\User\Installations\CbInstallationIdRcb\Repositories\CbRepositoryIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\User\Installations\CbInstallationIdRcb\Repositories\CbRepositoryIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories🌀CbRepositoryIdRcb();
        }
        $operation = new Operation\Apps\RemoveRepoFromInstallationForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Installations\CbInstallationIdRcb\Repositories\CbRepositoryIdRcb::class], $arguments['installation_id'], $arguments['repository_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
}
