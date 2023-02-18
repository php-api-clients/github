<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\DependencyGraph\Compare;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependencyGraphDiff;
use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;
use LogicException;
use Throwable;

use function assert;
use function count;

class CbBaseheadRcb implements ObjectMapper
{
    private array $hydrationStack = [];

    public function __construct()
    {
    }

    /**
     * @param class-string<T> $className
     *
     * @return T
     *
     * @template T of object
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match ($className) {
            'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependencyGraphDiff' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️DependencyGraphDiff($payload),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️DependencyGraphDiff(array $payload): DependencyGraphDiff
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['change_type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'change_type';
                goto after_change_type;
            }

            $properties['change_type'] = $value;

            after_change_type:

            $value = $payload['manifest'] ?? null;

            if ($value === null) {
                $missingFields[] = 'manifest';
                goto after_manifest;
            }

            $properties['manifest'] = $value;

            after_manifest:

            $value = $payload['ecosystem'] ?? null;

            if ($value === null) {
                $missingFields[] = 'ecosystem';
                goto after_ecosystem;
            }

            $properties['ecosystem'] = $value;

            after_ecosystem:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['version'] ?? null;

            if ($value === null) {
                $missingFields[] = 'version';
                goto after_version;
            }

            $properties['version'] = $value;

            after_version:

            $value = $payload['package_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'package_url';
                goto after_package_url;
            }

            $properties['package_url'] = $value;

            after_package_url:

            $value = $payload['license'] ?? null;

            if ($value === null) {
                $missingFields[] = 'license';
                goto after_license;
            }

            $properties['license'] = $value;

            after_license:

            $value = $payload['source_repository_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'source_repository_url';
                goto after_source_repository_url;
            }

            $properties['source_repository_url'] = $value;

            after_source_repository_url:

            $value = $payload['vulnerabilities'] ?? null;

            if ($value === null) {
                $missingFields[] = 'vulnerabilities';
                goto after_vulnerabilities;
            }

            $properties['vulnerabilities'] = $value;

            after_vulnerabilities:

            $value = $payload['scope'] ?? null;

            if ($value === null) {
                $missingFields[] = 'scope';
                goto after_scope;
            }

            $properties['scope'] = $value;

            after_scope:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependencyGraphDiff', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(DependencyGraphDiff::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new DependencyGraphDiff(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependencyGraphDiff', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️BasicError(array $payload): BasicError
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $missingFields[] = 'message';
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'documentation_url';
                goto after_documentation_url;
            }

            $properties['documentation_url'] = $value;

            after_documentation_url:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $missingFields[] = 'status';
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new BasicError(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }
    }

    public function serializeObject(object $object): mixed
    {
        try {
            $className = $object::class;

            return match ($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependencyGraphDiff' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️DependencyGraphDiff($object),
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️BasicError($object),
                default => throw new LogicException('No serialization defined for $className'),
            };
        } catch (Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }

    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeArrayItems(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeUuidToString(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️DependencyGraphDiff(mixed $object): mixed
    {
        assert($object instanceof DependencyGraphDiff);
        $result = [];

        $change_type = $object->change_type;

        if ($change_type === null) {
            goto after_change_type;
        }

        after_change_type:        $result['change_type'] = $change_type;

        $manifest = $object->manifest;

        if ($manifest === null) {
            goto after_manifest;
        }

        after_manifest:        $result['manifest'] = $manifest;

        $ecosystem = $object->ecosystem;

        if ($ecosystem === null) {
            goto after_ecosystem;
        }

        after_ecosystem:        $result['ecosystem'] = $ecosystem;

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }

        after_name:        $result['name'] = $name;

        $version = $object->version;

        if ($version === null) {
            goto after_version;
        }

        after_version:        $result['version'] = $version;

        $package_url = $object->package_url;

        if ($package_url === null) {
            goto after_package_url;
        }

        after_package_url:        $result['package_url'] = $package_url;

        $license = $object->license;

        if ($license === null) {
            goto after_license;
        }

        after_license:        $result['license'] = $license;

        $source_repository_url = $object->source_repository_url;

        if ($source_repository_url === null) {
            goto after_source_repository_url;
        }

        after_source_repository_url:        $result['source_repository_url'] = $source_repository_url;

        $vulnerabilities = $object->vulnerabilities;

        if ($vulnerabilities === null) {
            goto after_vulnerabilities;
        }

        static $vulnerabilitiesSerializer0;

        if ($vulnerabilitiesSerializer0 === null) {
            $vulnerabilitiesSerializer0 = new SerializeArrayItems(...[]);
        }

        $vulnerabilities                                         = $vulnerabilitiesSerializer0->serialize($vulnerabilities, $this);
        after_vulnerabilities:        $result['vulnerabilities'] = $vulnerabilities;

        $scope = $object->scope;

        if ($scope === null) {
            goto after_scope;
        }

        after_scope:        $result['scope'] = $scope;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        assert($object instanceof BasicError);
        $result = [];

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }

        after_message:        $result['message'] = $message;

        $documentation_url = $object->documentation_url;

        if ($documentation_url === null) {
            goto after_documentation_url;
        }

        after_documentation_url:        $result['documentation_url'] = $documentation_url;

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }

        after_status:        $result['status'] = $status;

        return $result;
    }

    /**
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     *
     * @template T
     */
    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            yield $index => $this->hydrateObject($className, $payload);
        }
    }

    /**
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     *
     * @template T
     */
    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            yield $index => $this->serializeObject($object);
        }
    }
}
