<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\DependencyGraph\Compare;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CbBaseheadRcb implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\DependencyGraphDiff' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphDiff($payload),
                'ApiClients\Client\GitHub\Schema\DependencyGraphDiff\Vulnerabilities' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphDiff⚡️Vulnerabilities($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphDiff(array $payload): \ApiClients\Client\GitHub\Schema\DependencyGraphDiff
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['change_type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'change_type';
                goto after_changeType;
            }

            $properties['changeType'] = $value;

            after_changeType:

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
                $properties['packageUrl'] = null;
                goto after_packageUrl;
            }

            $properties['packageUrl'] = $value;

            after_packageUrl:

            $value = $payload['license'] ?? null;

            if ($value === null) {
                $properties['license'] = null;
                goto after_license;
            }

            $properties['license'] = $value;

            after_license:

            $value = $payload['source_repository_url'] ?? null;

            if ($value === null) {
                $properties['sourceRepositoryUrl'] = null;
                goto after_sourceRepositoryUrl;
            }

            $properties['sourceRepositoryUrl'] = $value;

            after_sourceRepositoryUrl:

            $value = $payload['vulnerabilities'] ?? null;

            if ($value === null) {
                $missingFields[] = 'vulnerabilities';
                goto after_vulnerabilities;
            }

            static $vulnerabilitiesCaster1;

            if ($vulnerabilitiesCaster1 === null) {
                $vulnerabilitiesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\DependencyGraphDiff\\Vulnerabilities',
));
            }

            $value = $vulnerabilitiesCaster1->cast($value, $this);

            $properties['vulnerabilities'] = $value;

            after_vulnerabilities:

            $value = $payload['scope'] ?? null;

            if ($value === null) {
                $missingFields[] = 'scope';
                goto after_scope;
            }

            $properties['scope'] = $value;

            after_scope:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependencyGraphDiff', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\DependencyGraphDiff::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\DependencyGraphDiff(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependencyGraphDiff', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphDiff⚡️Vulnerabilities(array $payload): \ApiClients\Client\GitHub\Schema\DependencyGraphDiff\Vulnerabilities
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['severity'] ?? null;

            if ($value === null) {
                $missingFields[] = 'severity';
                goto after_severity;
            }

            $properties['severity'] = $value;

            after_severity:

            $value = $payload['advisory_ghsa_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'advisory_ghsa_id';
                goto after_advisoryGhsaId;
            }

            $properties['advisoryGhsaId'] = $value;

            after_advisoryGhsaId:

            $value = $payload['advisory_summary'] ?? null;

            if ($value === null) {
                $missingFields[] = 'advisory_summary';
                goto after_advisorySummary;
            }

            $properties['advisorySummary'] = $value;

            after_advisorySummary:

            $value = $payload['advisory_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'advisory_url';
                goto after_advisoryUrl;
            }

            $properties['advisoryUrl'] = $value;

            after_advisoryUrl:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependencyGraphDiff\Vulnerabilities', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\DependencyGraphDiff\Vulnerabilities::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\DependencyGraphDiff\Vulnerabilities(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependencyGraphDiff\Vulnerabilities', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\DependencyGraphDiff' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphDiff($object),
            'ApiClients\Client\GitHub\Schema\DependencyGraphDiff\Vulnerabilities' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphDiff⚡️Vulnerabilities($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphDiff(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\DependencyGraphDiff);
        $result = [];

        $changeType = $object->changeType;
        after_changeType:        $result['change_type'] = $changeType;

        
        $manifest = $object->manifest;
        after_manifest:        $result['manifest'] = $manifest;

        
        $ecosystem = $object->ecosystem;
        after_ecosystem:        $result['ecosystem'] = $ecosystem;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $version = $object->version;
        after_version:        $result['version'] = $version;

        
        $packageUrl = $object->packageUrl;

        if ($packageUrl === null) {
            goto after_packageUrl;
        }
        after_packageUrl:        $result['package_url'] = $packageUrl;

        
        $license = $object->license;

        if ($license === null) {
            goto after_license;
        }
        after_license:        $result['license'] = $license;

        
        $sourceRepositoryUrl = $object->sourceRepositoryUrl;

        if ($sourceRepositoryUrl === null) {
            goto after_sourceRepositoryUrl;
        }
        after_sourceRepositoryUrl:        $result['source_repository_url'] = $sourceRepositoryUrl;

        
        $vulnerabilities = $object->vulnerabilities;
        static $vulnerabilitiesSerializer0;

        if ($vulnerabilitiesSerializer0 === null) {
            $vulnerabilitiesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\DependencyGraphDiff\\Vulnerabilities',
));
        }
        
        $vulnerabilities = $vulnerabilitiesSerializer0->serialize($vulnerabilities, $this);
        after_vulnerabilities:        $result['vulnerabilities'] = $vulnerabilities;

        
        $scope = $object->scope;
        after_scope:        $result['scope'] = $scope;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphDiff⚡️Vulnerabilities(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\DependencyGraphDiff\Vulnerabilities);
        $result = [];

        $severity = $object->severity;
        after_severity:        $result['severity'] = $severity;

        
        $advisoryGhsaId = $object->advisoryGhsaId;
        after_advisoryGhsaId:        $result['advisory_ghsa_id'] = $advisoryGhsaId;

        
        $advisorySummary = $object->advisorySummary;
        after_advisorySummary:        $result['advisory_summary'] = $advisorySummary;

        
        $advisoryUrl = $object->advisoryUrl;
        after_advisoryUrl:        $result['advisory_url'] = $advisoryUrl;


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
