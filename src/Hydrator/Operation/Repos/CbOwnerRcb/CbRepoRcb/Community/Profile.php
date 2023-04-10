<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Community;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Profile implements ObjectMapper
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
            'ApiClients\Client\Github\Schema\CommunityProfile' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CommunityProfile($payload),
                'ApiClients\Client\Github\Schema\CommunityProfile\Files' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CommunityProfile⚡️Files($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CommunityProfile(array $payload): \ApiClients\Client\Github\Schema\CommunityProfile
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['health_percentage'] ?? null;

            if ($value === null) {
                $missingFields[] = 'health_percentage';
                goto after_healthPercentage;
            }

            $properties['healthPercentage'] = $value;

            after_healthPercentage:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['documentation'] ?? null;

            if ($value === null) {
                $properties['documentation'] = null;
                goto after_documentation;
            }

            $properties['documentation'] = $value;

            after_documentation:

            $value = $payload['files'] ?? null;

            if ($value === null) {
                $missingFields[] = 'files';
                goto after_files;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'files';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CommunityProfile⚡️Files($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['files'] = $value;

            after_files:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['content_reports_enabled'] ?? null;

            if ($value === null) {
                $properties['contentReportsEnabled'] = null;
                goto after_contentReportsEnabled;
            }

            $properties['contentReportsEnabled'] = $value;

            after_contentReportsEnabled:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\CommunityProfile', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\CommunityProfile::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\CommunityProfile(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\CommunityProfile', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️CommunityProfile⚡️Files(array $payload): \ApiClients\Client\Github\Schema\CommunityProfile\Files
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['code_of_conduct'] ?? null;

            if ($value === null) {
                $properties['codeOfConduct'] = null;
                goto after_codeOfConduct;
            }

            $properties['codeOfConduct'] = $value;

            after_codeOfConduct:

            $value = $payload['code_of_conduct_file'] ?? null;

            if ($value === null) {
                $properties['codeOfConductFile'] = null;
                goto after_codeOfConductFile;
            }

            $properties['codeOfConductFile'] = $value;

            after_codeOfConductFile:

            $value = $payload['license'] ?? null;

            if ($value === null) {
                $properties['license'] = null;
                goto after_license;
            }

            $properties['license'] = $value;

            after_license:

            $value = $payload['contributing'] ?? null;

            if ($value === null) {
                $properties['contributing'] = null;
                goto after_contributing;
            }

            $properties['contributing'] = $value;

            after_contributing:

            $value = $payload['readme'] ?? null;

            if ($value === null) {
                $properties['readme'] = null;
                goto after_readme;
            }

            $properties['readme'] = $value;

            after_readme:

            $value = $payload['issue_template'] ?? null;

            if ($value === null) {
                $properties['issueTemplate'] = null;
                goto after_issueTemplate;
            }

            $properties['issueTemplate'] = $value;

            after_issueTemplate:

            $value = $payload['pull_request_template'] ?? null;

            if ($value === null) {
                $properties['pullRequestTemplate'] = null;
                goto after_pullRequestTemplate;
            }

            $properties['pullRequestTemplate'] = $value;

            after_pullRequestTemplate:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\CommunityProfile\Files', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\CommunityProfile\Files::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\CommunityProfile\Files(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\CommunityProfile\Files', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\Github\Schema\CommunityProfile' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CommunityProfile($object),
            'ApiClients\Client\Github\Schema\CommunityProfile\Files' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CommunityProfile⚡️Files($object),
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


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CommunityProfile(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\CommunityProfile);
        $result = [];

        $healthPercentage = $object->healthPercentage;
        after_healthPercentage:        $result['health_percentage'] = $healthPercentage;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $documentation = $object->documentation;

        if ($documentation === null) {
            goto after_documentation;
        }
        after_documentation:        $result['documentation'] = $documentation;

        
        $files = $object->files;
        $files = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CommunityProfile⚡️Files($files);
        after_files:        $result['files'] = $files;

        
        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $contentReportsEnabled = $object->contentReportsEnabled;

        if ($contentReportsEnabled === null) {
            goto after_contentReportsEnabled;
        }
        after_contentReportsEnabled:        $result['content_reports_enabled'] = $contentReportsEnabled;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️CommunityProfile⚡️Files(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\CommunityProfile\Files);
        $result = [];

        $codeOfConduct = $object->codeOfConduct;

        if ($codeOfConduct === null) {
            goto after_codeOfConduct;
        }
        after_codeOfConduct:        $result['code_of_conduct'] = $codeOfConduct;

        
        $codeOfConductFile = $object->codeOfConductFile;

        if ($codeOfConductFile === null) {
            goto after_codeOfConductFile;
        }
        after_codeOfConductFile:        $result['code_of_conduct_file'] = $codeOfConductFile;

        
        $license = $object->license;

        if ($license === null) {
            goto after_license;
        }
        after_license:        $result['license'] = $license;

        
        $contributing = $object->contributing;

        if ($contributing === null) {
            goto after_contributing;
        }
        after_contributing:        $result['contributing'] = $contributing;

        
        $readme = $object->readme;

        if ($readme === null) {
            goto after_readme;
        }
        after_readme:        $result['readme'] = $readme;

        
        $issueTemplate = $object->issueTemplate;

        if ($issueTemplate === null) {
            goto after_issueTemplate;
        }
        after_issueTemplate:        $result['issue_template'] = $issueTemplate;

        
        $pullRequestTemplate = $object->pullRequestTemplate;

        if ($pullRequestTemplate === null) {
            goto after_pullRequestTemplate;
        }
        after_pullRequestTemplate:        $result['pull_request_template'] = $pullRequestTemplate;


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
