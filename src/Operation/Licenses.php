<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Licenses
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function getAllCommonlyUsed(bool $featured, int $perPage, int $page): Schema\LicenseSimple
    {
        if (array_key_exists(Operator\Licenses\GetAllCommonlyUsed::class, $this->operator) === false) {
            $this->operator[Operator\Licenses\GetAllCommonlyUsed::class] = new Operator\Licenses\GetAllCommonlyUsed($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Licenses());
        }

        return $this->operator[Operator\Licenses\GetAllCommonlyUsed::class]->call($featured, $perPage, $page);
    }

    public function get(string $license): Schema\License
    {
        if (array_key_exists(Operator\Licenses\Get::class, $this->operator) === false) {
            $this->operator[Operator\Licenses\Get::class] = new Operator\Licenses\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Licenses🌀License());
        }

        return $this->operator[Operator\Licenses\Get::class]->call($license);
    }

    public function getForRepo(string $owner, string $repo): Schema\LicenseContent
    {
        if (array_key_exists(Operator\Licenses\GetForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Licenses\GetForRepo::class] = new Operator\Licenses\GetForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀License());
        }

        return $this->operator[Operator\Licenses\GetForRepo::class]->call($owner, $repo);
    }
}
