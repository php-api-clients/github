<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Delete;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;

final class Users
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

    public function unblock(array $params)
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\User\Blocks\CbUsernameRcb::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Blocks\CbUsernameRcb::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Blocks🌀CbUsernameRcb();
        }

        $operation = new Operation\Users\Unblock($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Blocks\CbUsernameRcb::class], $arguments['username']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }

    public function unfollow(array $params)
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\User\Following\CbUsernameRcb::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Following\CbUsernameRcb::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Following🌀CbUsernameRcb();
        }

        $operation = new Operation\Users\Unfollow($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Following\CbUsernameRcb::class], $arguments['username']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }

    public function deleteGpgKeyForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('gpg_key_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: gpg_key_id');
        }

        $arguments['gpg_key_id'] = $params['gpg_key_id'];
        unset($params['gpg_key_id']);
        if (array_key_exists(Hydrator\Operation\User\GpgKeys\CbGpgKeyIdRcb::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\GpgKeys\CbGpgKeyIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys🌀CbGpgKeyIdRcb();
        }

        $operation = new Operation\Users\DeleteGpgKeyForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\GpgKeys\CbGpgKeyIdRcb::class], $arguments['gpg_key_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }

    public function deletePublicSshKeyForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('key_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: key_id');
        }

        $arguments['key_id'] = $params['key_id'];
        unset($params['key_id']);
        if (array_key_exists(Hydrator\Operation\User\Keys\CbKeyIdRcb::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Keys\CbKeyIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Keys🌀CbKeyIdRcb();
        }

        $operation = new Operation\Users\DeletePublicSshKeyForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Keys\CbKeyIdRcb::class], $arguments['key_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }

    public function deleteSshSigningKeyForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('ssh_signing_key_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ssh_signing_key_id');
        }

        $arguments['ssh_signing_key_id'] = $params['ssh_signing_key_id'];
        unset($params['ssh_signing_key_id']);
        if (array_key_exists(Hydrator\Operation\User\SshSigningKeys\CbSshSigningKeyIdRcb::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\SshSigningKeys\CbSshSigningKeyIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀User🌀SshSigningKeys🌀CbSshSigningKeyIdRcb();
        }

        $operation = new Operation\Users\DeleteSshSigningKeyForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\SshSigningKeys\CbSshSigningKeyIdRcb::class], $arguments['ssh_signing_key_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }

    public function deleteEmailForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists(Hydrator\Operation\User\Emails::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Emails::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Emails();
        }

        $operation = new Operation\Users\DeleteEmailForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Emails::class]);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }

    public function deleteSocialAccountForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists(Hydrator\Operation\User\SocialAccounts::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\SocialAccounts::class] = $this->hydrators->getObjectMapperOperation🌀User🌀SocialAccounts();
        }

        $operation = new Operation\Users\DeleteSocialAccountForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\SocialAccounts::class]);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }
}
