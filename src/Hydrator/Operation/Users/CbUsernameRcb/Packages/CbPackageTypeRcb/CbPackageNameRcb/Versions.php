<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Users\CbUsernameRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Versions implements ObjectMapper
{
    private array $hydrationStack = [];
    public function __construct() {}

    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match($className) {
            'ApiClients\Client\GitHub\Schema\PackageVersion' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion($payload),
                'ApiClients\Client\GitHub\Schema\PackageVersion\Metadata' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata($payload),
                'ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Container' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata⚡️Container($payload),
                'ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Docker' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata⚡️Docker($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion(array $payload): \ApiClients\Client\GitHub\Schema\PackageVersion
    {
        $properties = []; 
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
                goto after_package_html_url;
            }

            $properties['package_html_url'] = $value;

            after_package_html_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['html_url'] = null;
                goto after_html_url;
            }

            $properties['html_url'] = $value;

            after_html_url:

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
                goto after_created_at;
            }

            $properties['created_at'] = $value;

            after_created_at:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updated_at;
            }

            $properties['updated_at'] = $value;

            after_updated_at:

            $value = $payload['deleted_at'] ?? null;

            if ($value === null) {
                $properties['deleted_at'] = null;
                goto after_deleted_at;
            }

            $properties['deleted_at'] = $value;

            after_deleted_at:

            $value = $payload['metadata'] ?? null;

            if ($value === null) {
                $properties['metadata'] = null;
                goto after_metadata;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'metadata';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['metadata'] = $value;

            after_metadata:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PackageVersion', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PackageVersion::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\PackageVersion(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PackageVersion', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata(array $payload): \ApiClients\Client\GitHub\Schema\PackageVersion\Metadata
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['package_type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'package_type';
                goto after_package_type;
            }

            $properties['package_type'] = $value;

            after_package_type:

            $value = $payload['container'] ?? null;

            if ($value === null) {
                $properties['container'] = null;
                goto after_container;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'container';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata⚡️Container($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata⚡️Docker($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['docker'] = $value;

            after_docker:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PackageVersion\Metadata', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PackageVersion\Metadata::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\PackageVersion\Metadata(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PackageVersion\Metadata', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata⚡️Container(array $payload): \ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Container
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['tags'] ?? null;

            if ($value === null) {
                $missingFields[] = 'tags';
                goto after_tags;
            }

            $properties['tags'] = $value;

            after_tags:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Container', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Container::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Container(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Container', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata⚡️Docker(array $payload): \ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Docker
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['tag'] ?? null;

            if ($value === null) {
                $properties['tag'] = null;
                goto after_tag;
            }

            $properties['tag'] = $value;

            after_tag:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Docker', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Docker::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Docker(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Docker', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\GitHub\Schema\BasicError
    {
        $properties = []; 
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
                $properties['documentation_url'] = null;
                goto after_documentation_url;
            }

            $properties['documentation_url'] = $value;

            after_documentation_url:

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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\BasicError(...$properties);
        } catch (\Throwable $exception) {
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

        throw new \LogicException('No type mapped for object of class: ' . get_class($object));
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, get_class($object));
    }

    /**
     * @template T
     *
     * @param T               $object
     * @param class-string<T> $className
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match($className) {
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
                default => throw new \LogicException('No serialization defined for $className'),
            };
        } catch (\Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }
    
    
    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\PackageVersion);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $package_html_url = $object->package_html_url;
        after_package_html_url:        $result['package_html_url'] = $package_html_url;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
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

        
        $created_at = $object->created_at;
        after_created_at:        $result['created_at'] = $created_at;

        
        $updated_at = $object->updated_at;
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $deleted_at = $object->deleted_at;

        if ($deleted_at === null) {
            goto after_deleted_at;
        }
        after_deleted_at:        $result['deleted_at'] = $deleted_at;

        
        $metadata = $object->metadata;

        if ($metadata === null) {
            goto after_metadata;
        }
        $metadata = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata($metadata);
        after_metadata:        $result['metadata'] = $metadata;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\PackageVersion\Metadata);
        $result = [];

        $package_type = $object->package_type;
        after_package_type:        $result['package_type'] = $package_type;

        
        $container = $object->container;

        if ($container === null) {
            goto after_container;
        }
        $container = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata⚡️Container($container);
        after_container:        $result['container'] = $container;

        
        $docker = $object->docker;

        if ($docker === null) {
            goto after_docker;
        }
        $docker = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata⚡️Docker($docker);
        after_docker:        $result['docker'] = $docker;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata⚡️Container(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Container);
        $result = [];

        $tags = $object->tags;
        static $tagsSerializer0;

        if ($tagsSerializer0 === null) {
            $tagsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $tags = $tagsSerializer0->serialize($tags, $this);
        after_tags:        $result['tags'] = $tags;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PackageVersion⚡️Metadata⚡️Docker(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Docker);
        $result = [];

        $tag = $object->tag;

        if ($tag === null) {
            goto after_tag;
        }
        static $tagSerializer0;

        if ($tagSerializer0 === null) {
            $tagSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $tag = $tagSerializer0->serialize($tag, $this);
        after_tag:        $result['tag'] = $tag;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BasicError);
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
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
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
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
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
