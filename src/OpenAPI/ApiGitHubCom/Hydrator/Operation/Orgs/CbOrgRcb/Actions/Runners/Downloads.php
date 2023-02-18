<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Downloads implements ObjectMapper
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
            'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerApplication' => $this->hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️RunnerApplication($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️RunnerApplication(array $payload): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerApplication
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['os'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'os';
                    goto after_os;
                }

                $properties['os'] = $value;
    
                after_os:

                $value = $payload['architecture'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'architecture';
                    goto after_architecture;
                }

                $properties['architecture'] = $value;
    
                after_architecture:

                $value = $payload['download_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'download_url';
                    goto after_download_url;
                }

                $properties['download_url'] = $value;
    
                after_download_url:

                $value = $payload['filename'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'filename';
                    goto after_filename;
                }

                $properties['filename'] = $value;
    
                after_filename:

                $value = $payload['temp_download_token'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'temp_download_token';
                    goto after_temp_download_token;
                }

                $properties['temp_download_token'] = $value;
    
                after_temp_download_token:

                $value = $payload['sha256_checksum'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'sha256_checksum';
                    goto after_sha256_checksum;
                }

                $properties['sha256_checksum'] = $value;
    
                after_sha256_checksum:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerApplication', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerApplication::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerApplication(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerApplication', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerApplication' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️RunnerApplication($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️OpenAPI⚡️ApiGitHubCom⚡️Schema⚡️RunnerApplication(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerApplication);
        $result = [];
        
        $os = $object->os;

        if ($os === null) {
            goto after_os;
        }
        after_os:        $result['os'] = $os;

        
        $architecture = $object->architecture;

        if ($architecture === null) {
            goto after_architecture;
        }
        after_architecture:        $result['architecture'] = $architecture;

        
        $download_url = $object->download_url;

        if ($download_url === null) {
            goto after_download_url;
        }
        after_download_url:        $result['download_url'] = $download_url;

        
        $filename = $object->filename;

        if ($filename === null) {
            goto after_filename;
        }
        after_filename:        $result['filename'] = $filename;

        
        $temp_download_token = $object->temp_download_token;
        after_temp_download_token:        $result['temp_download_token'] = $temp_download_token;

        
        $sha256_checksum = $object->sha256_checksum;
        after_sha256_checksum:        $result['sha256_checksum'] = $sha256_checksum;


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
