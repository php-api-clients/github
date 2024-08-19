<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions;

use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\PackageVersion;
use ApiClients\Client\GitHub\Schema\PackageVersion\Metadata;
use ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Container;
use ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Docker;
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

use function array_pop;
use function assert;
use function count;
use function is_a;
use function is_array;

class PackageVersionId implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\PackageVersion' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion($payload),
                'ApiClients\Client\GitHub\Schema\PackageVersion\Metadata' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata($payload),
                'ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Container' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata⚡️Container($payload),
                'ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Docker' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata⚡️Docker($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion(array $payload): PackageVersion
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['package_html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'package_html_url';
                goto after_packageHtmlUrl;
            }

            $properties['packageHtmlUrl'] = $value;

            after_packageHtmlUrl:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['license'] ?? null;

            if ($value === null) {
                $properties['license'] = null;
                goto after_license;
            }

            $properties['license'] = $value;

            after_license:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['deleted_at'] ?? null;

            if ($value === null) {
                $properties['deletedAt'] = null;
                goto after_deletedAt;
            }

            $properties['deletedAt'] = $value;

            after_deletedAt:

            $value = $payload['metadata'] ?? null;

            if ($value === null) {
                $properties['metadata'] = null;
                goto after_metadata;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'metadata';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['metadata'] = $value;

            after_metadata:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PackageVersion', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(PackageVersion::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new PackageVersion(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PackageVersion', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata(array $payload): Metadata
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['package_type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'package_type';
                goto after_packageType;
            }

            $properties['packageType'] = $value;

            after_packageType:

            $value = $payload['container'] ?? null;

            if ($value === null) {
                $properties['container'] = null;
                goto after_container;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'container';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata⚡️Container($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['container'] = $value;

            after_container:

            $value = $payload['docker'] ?? null;

            if ($value === null) {
                $properties['docker'] = null;
                goto after_docker;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'docker';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata⚡️Docker($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['docker'] = $value;

            after_docker:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PackageVersion\Metadata', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Metadata::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Metadata(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PackageVersion\Metadata', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata⚡️Container(array $payload): Container
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['tags'] ?? null;

            if ($value === null) {
                $missingFields[] = 'tags';
                goto after_tags;
            }

            $properties['tags'] = $value;

            after_tags:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Container', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Container::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Container(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Container', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata⚡️Docker(array $payload): Docker
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['tag'] ?? null;

            if ($value === null) {
                $properties['tag'] = null;
                goto after_tag;
            }

            $properties['tag'] = $value;

            after_tag:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Docker', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Docker::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Docker(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Docker', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(array $payload): BasicError
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new BasicError(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }
    }

    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new LogicException('No type mapped for object of class: ' . $object::class);
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, $object::class);
    }

    /**
     * @param T               $object
     * @param class-string<T> $className
     *
     * @template T
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match ($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHub\Schema\PackageVersion' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion($object),
                'ApiClients\Client\GitHub\Schema\PackageVersion\Metadata' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata($object),
                'ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Container' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata⚡️Container($object),
                'ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Docker' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata⚡️Docker($object),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
                default => throw new LogicException("No serialization defined for $className"),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion(mixed $object): mixed
    {
        assert($object instanceof PackageVersion);
        $result = [];

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $name                              = $object->name;
        after_name:        $result['name'] = $name;

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $packageHtmlUrl                                          = $object->packageHtmlUrl;
        after_packageHtmlUrl:        $result['package_html_url'] = $packageHtmlUrl;

        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }

        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $license = $object->license;

        if ($license === null) {
            goto after_license;
        }

        after_license:        $result['license'] = $license;

        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }

        after_description:        $result['description'] = $description;

        $createdAt                                    = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        $updatedAt                                    = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        $deletedAt = $object->deletedAt;

        if ($deletedAt === null) {
            goto after_deletedAt;
        }

        after_deletedAt:        $result['deleted_at'] = $deletedAt;

        $metadata = $object->metadata;

        if ($metadata === null) {
            goto after_metadata;
        }

        $metadata                                  = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata($metadata);
        after_metadata:        $result['metadata'] = $metadata;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata(mixed $object): mixed
    {
        assert($object instanceof Metadata);
        $result = [];

        $packageType                                      = $object->packageType;
        after_packageType:        $result['package_type'] = $packageType;

        $container = $object->container;

        if ($container === null) {
            goto after_container;
        }

        $container                                   = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata⚡️Container($container);
        after_container:        $result['container'] = $container;

        $docker = $object->docker;

        if ($docker === null) {
            goto after_docker;
        }

        $docker                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata⚡️Docker($docker);
        after_docker:        $result['docker'] = $docker;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata⚡️Container(mixed $object): mixed
    {
        assert($object instanceof Container);
        $result = [];

        $tags = $object->tags;
        static $tagsSerializer0;

        if ($tagsSerializer0 === null) {
            $tagsSerializer0 = new SerializeArrayItems(...[]);
        }

        $tags                              = $tagsSerializer0->serialize($tags, $this);
        after_tags:        $result['tags'] = $tags;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata⚡️Docker(mixed $object): mixed
    {
        assert($object instanceof Docker);
        $result = [];

        $tag = $object->tag;

        if ($tag === null) {
            goto after_tag;
        }

        static $tagSerializer0;

        if ($tagSerializer0 === null) {
            $tagSerializer0 = new SerializeArrayItems(...[]);
        }

        $tag                             = $tagSerializer0->serialize($tag, $this);
        after_tag:        $result['tag'] = $tag;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        assert($object instanceof BasicError);
        $result = [];

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }

        after_message:        $result['message'] = $message;

        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }

        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

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
