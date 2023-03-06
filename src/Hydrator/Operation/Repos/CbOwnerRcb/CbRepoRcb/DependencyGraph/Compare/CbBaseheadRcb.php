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
                    $properties['change_type'] = null;
                    goto after_change_type;
                }

                $properties['change_type'] = $value;
    
                after_change_type:

                $value = $payload['manifest'] ?? null;
    
                if ($value === null) {
                    $properties['manifest'] = null;
                    goto after_manifest;
                }

                $properties['manifest'] = $value;
    
                after_manifest:

                $value = $payload['ecosystem'] ?? null;
    
                if ($value === null) {
                    $properties['ecosystem'] = null;
                    goto after_ecosystem;
                }

                $properties['ecosystem'] = $value;
    
                after_ecosystem:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['version'] ?? null;
    
                if ($value === null) {
                    $properties['version'] = null;
                    goto after_version;
                }

                $properties['version'] = $value;
    
                after_version:

                $value = $payload['package_url'] ?? null;
    
                if ($value === null) {
                    $properties['package_url'] = null;
                    goto after_package_url;
                }

                $properties['package_url'] = $value;
    
                after_package_url:

                $value = $payload['license'] ?? null;
    
                if ($value === null) {
                    $properties['license'] = null;
                    goto after_license;
                }

                $properties['license'] = $value;
    
                after_license:

                $value = $payload['source_repository_url'] ?? null;
    
                if ($value === null) {
                    $properties['source_repository_url'] = null;
                    goto after_source_repository_url;
                }

                $properties['source_repository_url'] = $value;
    
                after_source_repository_url:

                $value = $payload['vulnerabilities'] ?? null;
    
                if ($value === null) {
                    $properties['vulnerabilities'] = null;
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
                    $properties['scope'] = null;
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
                    $properties['severity'] = null;
                    goto after_severity;
                }

                $properties['severity'] = $value;
    
                after_severity:

                $value = $payload['advisory_ghsa_id'] ?? null;
    
                if ($value === null) {
                    $properties['advisory_ghsa_id'] = null;
                    goto after_advisory_ghsa_id;
                }

                $properties['advisory_ghsa_id'] = $value;
    
                after_advisory_ghsa_id:

                $value = $payload['advisory_summary'] ?? null;
    
                if ($value === null) {
                    $properties['advisory_summary'] = null;
                    goto after_advisory_summary;
                }

                $properties['advisory_summary'] = $value;
    
                after_advisory_summary:

                $value = $payload['advisory_url'] ?? null;
    
                if ($value === null) {
                    $properties['advisory_url'] = null;
                    goto after_advisory_url;
                }

                $properties['advisory_url'] = $value;
    
                after_advisory_url:

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
    
    public function serializeObject(object $object): mixed
    {
        try {
            $className = get_class($object);

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
            $vulnerabilitiesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\DependencyGraphDiff\\Vulnerabilities',
));
        }
        
        $vulnerabilities = $vulnerabilitiesSerializer0->serialize($vulnerabilities, $this);
        after_vulnerabilities:        $result['vulnerabilities'] = $vulnerabilities;

        
        $scope = $object->scope;

        if ($scope === null) {
            goto after_scope;
        }
        after_scope:        $result['scope'] = $scope;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphDiff⚡️Vulnerabilities(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\DependencyGraphDiff\Vulnerabilities);
        $result = [];
        
        $severity = $object->severity;

        if ($severity === null) {
            goto after_severity;
        }
        after_severity:        $result['severity'] = $severity;

        
        $advisory_ghsa_id = $object->advisory_ghsa_id;

        if ($advisory_ghsa_id === null) {
            goto after_advisory_ghsa_id;
        }
        after_advisory_ghsa_id:        $result['advisory_ghsa_id'] = $advisory_ghsa_id;

        
        $advisory_summary = $object->advisory_summary;

        if ($advisory_summary === null) {
            goto after_advisory_summary;
        }
        after_advisory_summary:        $result['advisory_summary'] = $advisory_summary;

        
        $advisory_url = $object->advisory_url;

        if ($advisory_url === null) {
            goto after_advisory_url;
        }
        after_advisory_url:        $result['advisory_url'] = $advisory_url;


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
