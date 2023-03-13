<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class RateLimit implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\RateLimitOverview' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimitOverview($payload),
                'ApiClients\Client\GitHub\Schema\RateLimitOverview\Resources' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimitOverview⚡️Resources($payload),
                'ApiClients\Client\GitHub\Schema\RateLimit' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimit($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimitOverview(array $payload): \ApiClients\Client\GitHub\Schema\RateLimitOverview
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['resources'] ?? null;

            if ($value === null) {
                $missingFields[] = 'resources';
                goto after_resources;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'resources';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimitOverview⚡️Resources($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['resources'] = $value;

            after_resources:

            $value = $payload['rate'] ?? null;

            if ($value === null) {
                $missingFields[] = 'rate';
                goto after_rate;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'rate';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['rate'] = $value;

            after_rate:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RateLimitOverview', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\RateLimitOverview::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\RateLimitOverview(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RateLimitOverview', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimitOverview⚡️Resources(array $payload): \ApiClients\Client\GitHub\Schema\RateLimitOverview\Resources
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['core'] ?? null;

            if ($value === null) {
                $missingFields[] = 'core';
                goto after_core;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'core';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['core'] = $value;

            after_core:

            $value = $payload['graphql'] ?? null;

            if ($value === null) {
                $properties['graphql'] = null;
                goto after_graphql;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'graphql';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['graphql'] = $value;

            after_graphql:

            $value = $payload['search'] ?? null;

            if ($value === null) {
                $missingFields[] = 'search';
                goto after_search;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'search';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['search'] = $value;

            after_search:

            $value = $payload['source_import'] ?? null;

            if ($value === null) {
                $properties['source_import'] = null;
                goto after_source_import;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'source_import';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['source_import'] = $value;

            after_source_import:

            $value = $payload['integration_manifest'] ?? null;

            if ($value === null) {
                $properties['integration_manifest'] = null;
                goto after_integration_manifest;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'integration_manifest';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['integration_manifest'] = $value;

            after_integration_manifest:

            $value = $payload['code_scanning_upload'] ?? null;

            if ($value === null) {
                $properties['code_scanning_upload'] = null;
                goto after_code_scanning_upload;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'code_scanning_upload';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['code_scanning_upload'] = $value;

            after_code_scanning_upload:

            $value = $payload['actions_runner_registration'] ?? null;

            if ($value === null) {
                $properties['actions_runner_registration'] = null;
                goto after_actions_runner_registration;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'actions_runner_registration';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['actions_runner_registration'] = $value;

            after_actions_runner_registration:

            $value = $payload['scim'] ?? null;

            if ($value === null) {
                $properties['scim'] = null;
                goto after_scim;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'scim';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['scim'] = $value;

            after_scim:

            $value = $payload['dependency_snapshots'] ?? null;

            if ($value === null) {
                $properties['dependency_snapshots'] = null;
                goto after_dependency_snapshots;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'dependency_snapshots';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['dependency_snapshots'] = $value;

            after_dependency_snapshots:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RateLimitOverview\Resources', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\RateLimitOverview\Resources::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\RateLimitOverview\Resources(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RateLimitOverview\Resources', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimit(array $payload): \ApiClients\Client\GitHub\Schema\RateLimit
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['limit'] ?? null;

            if ($value === null) {
                $missingFields[] = 'limit';
                goto after_limit;
            }

            $properties['limit'] = $value;

            after_limit:

            $value = $payload['remaining'] ?? null;

            if ($value === null) {
                $missingFields[] = 'remaining';
                goto after_remaining;
            }

            $properties['remaining'] = $value;

            after_remaining:

            $value = $payload['reset'] ?? null;

            if ($value === null) {
                $missingFields[] = 'reset';
                goto after_reset;
            }

            $properties['reset'] = $value;

            after_reset:

            $value = $payload['used'] ?? null;

            if ($value === null) {
                $missingFields[] = 'used';
                goto after_used;
            }

            $properties['used'] = $value;

            after_used:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RateLimit', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\RateLimit::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\RateLimit(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RateLimit', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\RateLimitOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimitOverview($object),
            'ApiClients\Client\GitHub\Schema\RateLimitOverview\Resources' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimitOverview⚡️Resources($object),
            'ApiClients\Client\GitHub\Schema\RateLimit' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimit($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimitOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\RateLimitOverview);
        $result = [];

        $resources = $object->resources;
        $resources = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimitOverview⚡️Resources($resources);
        after_resources:        $result['resources'] = $resources;

        
        $rate = $object->rate;
        $rate = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimit($rate);
        after_rate:        $result['rate'] = $rate;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimitOverview⚡️Resources(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\RateLimitOverview\Resources);
        $result = [];

        $core = $object->core;
        $core = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimit($core);
        after_core:        $result['core'] = $core;

        
        $graphql = $object->graphql;

        if ($graphql === null) {
            goto after_graphql;
        }
        $graphql = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimit($graphql);
        after_graphql:        $result['graphql'] = $graphql;

        
        $search = $object->search;
        $search = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimit($search);
        after_search:        $result['search'] = $search;

        
        $source_import = $object->source_import;

        if ($source_import === null) {
            goto after_source_import;
        }
        $source_import = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimit($source_import);
        after_source_import:        $result['source_import'] = $source_import;

        
        $integration_manifest = $object->integration_manifest;

        if ($integration_manifest === null) {
            goto after_integration_manifest;
        }
        $integration_manifest = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimit($integration_manifest);
        after_integration_manifest:        $result['integration_manifest'] = $integration_manifest;

        
        $code_scanning_upload = $object->code_scanning_upload;

        if ($code_scanning_upload === null) {
            goto after_code_scanning_upload;
        }
        $code_scanning_upload = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimit($code_scanning_upload);
        after_code_scanning_upload:        $result['code_scanning_upload'] = $code_scanning_upload;

        
        $actions_runner_registration = $object->actions_runner_registration;

        if ($actions_runner_registration === null) {
            goto after_actions_runner_registration;
        }
        $actions_runner_registration = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimit($actions_runner_registration);
        after_actions_runner_registration:        $result['actions_runner_registration'] = $actions_runner_registration;

        
        $scim = $object->scim;

        if ($scim === null) {
            goto after_scim;
        }
        $scim = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimit($scim);
        after_scim:        $result['scim'] = $scim;

        
        $dependency_snapshots = $object->dependency_snapshots;

        if ($dependency_snapshots === null) {
            goto after_dependency_snapshots;
        }
        $dependency_snapshots = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimit($dependency_snapshots);
        after_dependency_snapshots:        $result['dependency_snapshots'] = $dependency_snapshots;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RateLimit(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\RateLimit);
        $result = [];

        $limit = $object->limit;
        after_limit:        $result['limit'] = $limit;

        
        $remaining = $object->remaining;
        after_remaining:        $result['remaining'] = $remaining;

        
        $reset = $object->reset;
        after_reset:        $result['reset'] = $reset;

        
        $used = $object->used;
        after_used:        $result['used'] = $used;


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
