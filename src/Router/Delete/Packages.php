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
final class Packages
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
    public function deletePackageForAuthenticatedUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('package_type', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_type');
        }
        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('package_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_name');
        }
        $arguments['package_name'] = $params['package_name'];
        unset($params['package_name']);
        if (\array_key_exists(Hydrator\Operation\User\Packages\CbPackageTypeRcb\CbPackageNameRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\User\Packages\CbPackageTypeRcb\CbPackageNameRcb::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb();
        }
        $operation = new Operation\Packages\DeletePackageForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Packages\CbPackageTypeRcb\CbPackageNameRcb::class], $arguments['package_type'], $arguments['package_name']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
    public function deletePackageVersionForAuthenticatedUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('package_type', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_type');
        }
        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('package_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_name');
        }
        $arguments['package_name'] = $params['package_name'];
        unset($params['package_name']);
        if (array_key_exists('package_version_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_version_id');
        }
        $arguments['package_version_id'] = $params['package_version_id'];
        unset($params['package_version_id']);
        if (\array_key_exists(Hydrator\Operation\User\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions\CbPackageVersionIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\User\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions\CbPackageVersionIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb🌀Versions🌀CbPackageVersionIdRcb();
        }
        $operation = new Operation\Packages\DeletePackageVersionForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions\CbPackageVersionIdRcb::class], $arguments['package_type'], $arguments['package_name'], $arguments['package_version_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
    public function deletePackageForOrg(array $params)
    {
        $arguments = array();
        if (array_key_exists('package_type', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_type');
        }
        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('package_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_name');
        }
        $arguments['package_name'] = $params['package_name'];
        unset($params['package_name']);
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb();
        }
        $operation = new Operation\Packages\DeletePackageForOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb::class], $arguments['package_type'], $arguments['package_name'], $arguments['org']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
    public function deletePackageForUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('package_type', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_type');
        }
        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('package_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_name');
        }
        $arguments['package_name'] = $params['package_name'];
        unset($params['package_name']);
        if (array_key_exists('username', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: username');
        }
        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (\array_key_exists(Hydrator\Operation\Users\CbUsernameRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Users\CbUsernameRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb();
        }
        $operation = new Operation\Packages\DeletePackageForUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\CbUsernameRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb::class], $arguments['package_type'], $arguments['package_name'], $arguments['username']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
    public function deletePackageVersionForOrg(array $params)
    {
        $arguments = array();
        if (array_key_exists('package_type', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_type');
        }
        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('package_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_name');
        }
        $arguments['package_name'] = $params['package_name'];
        unset($params['package_name']);
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('package_version_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_version_id');
        }
        $arguments['package_version_id'] = $params['package_version_id'];
        unset($params['package_version_id']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions\CbPackageVersionIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions\CbPackageVersionIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb🌀Versions🌀CbPackageVersionIdRcb();
        }
        $operation = new Operation\Packages\DeletePackageVersionForOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions\CbPackageVersionIdRcb::class], $arguments['package_type'], $arguments['package_name'], $arguments['org'], $arguments['package_version_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
    public function deletePackageVersionForUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('package_type', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_type');
        }
        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('package_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_name');
        }
        $arguments['package_name'] = $params['package_name'];
        unset($params['package_name']);
        if (array_key_exists('username', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: username');
        }
        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('package_version_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_version_id');
        }
        $arguments['package_version_id'] = $params['package_version_id'];
        unset($params['package_version_id']);
        if (\array_key_exists(Hydrator\Operation\Users\CbUsernameRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions\CbPackageVersionIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Users\CbUsernameRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions\CbPackageVersionIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb🌀Versions🌀CbPackageVersionIdRcb();
        }
        $operation = new Operation\Packages\DeletePackageVersionForUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\CbUsernameRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions\CbPackageVersionIdRcb::class], $arguments['package_type'], $arguments['package_name'], $arguments['username'], $arguments['package_version_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
}
