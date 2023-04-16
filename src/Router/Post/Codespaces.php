<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Post;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema\Codespace;
use ApiClients\Client\GitHub\Schema\CodespaceExportDetails;
use ApiClients\Client\GitHub\Schema\CodespaceWithFullRepository;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;

final class Codespaces
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];
    private readonly SchemaValidator $requestSchemaValidator;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrators $hydrators;
    private readonly Browser $browser;
    private readonly AuthenticationInterface $authentication;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, Hydrators $hydrators, Browser $browser, AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators               = $hydrators;
        $this->browser                 = $browser;
        $this->authentication          = $authentication;
    }

    public function setCodespacesBillingUsers(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Billing\SelectedUsers::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Billing\SelectedUsers::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Billing🌀SelectedUsers();
        }

        $operation = new Operation\Codespaces\SetCodespacesBillingUsers($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Billing\SelectedUsers::class], $arguments['org']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }

    public function createWithRepoForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces();
        }

        $operation = new Operation\Codespaces\CreateWithRepoForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces::class], $arguments['owner'], $arguments['repo']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Codespace {
            return $operation->createResponse($response);
        });
    }

    public function exportForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('codespace_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: codespace_name');
        }

        $arguments['codespace_name'] = $params['codespace_name'];
        unset($params['codespace_name']);
        if (array_key_exists(Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Exports::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Exports::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Exports();
        }

        $operation = new Operation\Codespaces\ExportForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Exports::class], $arguments['codespace_name']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CodespaceExportDetails {
            return $operation->createResponse($response);
        });
    }

    public function publishForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('codespace_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: codespace_name');
        }

        $arguments['codespace_name'] = $params['codespace_name'];
        unset($params['codespace_name']);
        if (array_key_exists(Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Publish::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Publish::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Publish();
        }

        $operation = new Operation\Codespaces\PublishForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Publish::class], $arguments['codespace_name']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CodespaceWithFullRepository {
            return $operation->createResponse($response);
        });
    }

    public function startForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('codespace_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: codespace_name');
        }

        $arguments['codespace_name'] = $params['codespace_name'];
        unset($params['codespace_name']);
        if (array_key_exists(Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Start::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Start::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Start();
        }

        $operation = new Operation\Codespaces\StartForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Start::class], $arguments['codespace_name']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Codespace {
            return $operation->createResponse($response);
        });
    }

    public function stopForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('codespace_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: codespace_name');
        }

        $arguments['codespace_name'] = $params['codespace_name'];
        unset($params['codespace_name']);
        if (array_key_exists(Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Stop::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Stop::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Stop();
        }

        $operation = new Operation\Codespaces\StopForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Stop::class], $arguments['codespace_name']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Codespace {
            return $operation->createResponse($response);
        });
    }

    public function createForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists(Hydrator\Operation\User\Codespaces::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces();
        }

        $operation = new Operation\Codespaces\CreateForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces::class]);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Codespace {
            return $operation->createResponse($response);
        });
    }

    public function createWithPrForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('pull_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pull_number');
        }

        $arguments['pull_number'] = $params['pull_number'];
        unset($params['pull_number']);
        if (array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Codespaces::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Codespaces::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Codespaces();
        }

        $operation = new Operation\Codespaces\CreateWithPrForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Codespaces::class], $arguments['owner'], $arguments['repo'], $arguments['pull_number']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Codespace {
            return $operation->createResponse($response);
        });
    }

    public function stopInOrganization(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('codespace_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: codespace_name');
        }

        $arguments['codespace_name'] = $params['codespace_name'];
        unset($params['codespace_name']);
        if (array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Members\CbUsernameRcb\Codespaces\CbCodespaceNameRcb\Stop::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Members\CbUsernameRcb\Codespaces\CbCodespaceNameRcb\Stop::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Members🌀CbUsernameRcb🌀Codespaces🌀CbCodespaceNameRcb🌀Stop();
        }

        $operation = new Operation\Codespaces\StopInOrganization($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Members\CbUsernameRcb\Codespaces\CbCodespaceNameRcb\Stop::class], $arguments['org'], $arguments['username'], $arguments['codespace_name']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Codespace {
            return $operation->createResponse($response);
        });
    }
}
