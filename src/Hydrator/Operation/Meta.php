<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Meta implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\ApiOverview' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ApiOverview($payload),
                'ApiClients\Client\GitHub\Schema\ApiOverview\SshKeyFingerprints' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ApiOverview⚡️SshKeyFingerprints($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ApiOverview(array $payload): \ApiClients\Client\GitHub\Schema\ApiOverview
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['verifiable_password_authentication'] ?? null;

            if ($value === null) {
                $missingFields[] = 'verifiable_password_authentication';
                goto after_verifiablePasswordAuthentication;
            }

            $properties['verifiablePasswordAuthentication'] = $value;

            after_verifiablePasswordAuthentication:

            $value = $payload['ssh_key_fingerprints'] ?? null;

            if ($value === null) {
                $properties['sshKeyFingerprints'] = null;
                goto after_sshKeyFingerprints;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'sshKeyFingerprints';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ApiOverview⚡️SshKeyFingerprints($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['sshKeyFingerprints'] = $value;

            after_sshKeyFingerprints:

            $value = $payload['ssh_keys'] ?? null;

            if ($value === null) {
                $properties['sshKeys'] = null;
                goto after_sshKeys;
            }

            $properties['sshKeys'] = $value;

            after_sshKeys:

            $value = $payload['hooks'] ?? null;

            if ($value === null) {
                $properties['hooks'] = null;
                goto after_hooks;
            }

            $properties['hooks'] = $value;

            after_hooks:

            $value = $payload['web'] ?? null;

            if ($value === null) {
                $properties['web'] = null;
                goto after_web;
            }

            $properties['web'] = $value;

            after_web:

            $value = $payload['api'] ?? null;

            if ($value === null) {
                $properties['api'] = null;
                goto after_api;
            }

            $properties['api'] = $value;

            after_api:

            $value = $payload['git'] ?? null;

            if ($value === null) {
                $properties['git'] = null;
                goto after_git;
            }

            $properties['git'] = $value;

            after_git:

            $value = $payload['packages'] ?? null;

            if ($value === null) {
                $properties['packages'] = null;
                goto after_packages;
            }

            $properties['packages'] = $value;

            after_packages:

            $value = $payload['pages'] ?? null;

            if ($value === null) {
                $properties['pages'] = null;
                goto after_pages;
            }

            $properties['pages'] = $value;

            after_pages:

            $value = $payload['importer'] ?? null;

            if ($value === null) {
                $properties['importer'] = null;
                goto after_importer;
            }

            $properties['importer'] = $value;

            after_importer:

            $value = $payload['actions'] ?? null;

            if ($value === null) {
                $properties['actions'] = null;
                goto after_actions;
            }

            $properties['actions'] = $value;

            after_actions:

            $value = $payload['dependabot'] ?? null;

            if ($value === null) {
                $properties['dependabot'] = null;
                goto after_dependabot;
            }

            $properties['dependabot'] = $value;

            after_dependabot:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ApiOverview', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ApiOverview::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ApiOverview(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ApiOverview', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ApiOverview⚡️SshKeyFingerprints(array $payload): \ApiClients\Client\GitHub\Schema\ApiOverview\SshKeyFingerprints
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['SHA256_RSA'] ?? null;

            if ($value === null) {
                $properties['sha256Rsa'] = null;
                goto after_sha256Rsa;
            }

            $properties['sha256Rsa'] = $value;

            after_sha256Rsa:

            $value = $payload['SHA256_DSA'] ?? null;

            if ($value === null) {
                $properties['sha256Dsa'] = null;
                goto after_sha256Dsa;
            }

            $properties['sha256Dsa'] = $value;

            after_sha256Dsa:

            $value = $payload['SHA256_ECDSA'] ?? null;

            if ($value === null) {
                $properties['sha256Ecdsa'] = null;
                goto after_sha256Ecdsa;
            }

            $properties['sha256Ecdsa'] = $value;

            after_sha256Ecdsa:

            $value = $payload['SHA256_ED25519'] ?? null;

            if ($value === null) {
                $properties['sha256Ed25519'] = null;
                goto after_sha256Ed25519;
            }

            $properties['sha256Ed25519'] = $value;

            after_sha256Ed25519:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ApiOverview\SshKeyFingerprints', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ApiOverview\SshKeyFingerprints::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ApiOverview\SshKeyFingerprints(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ApiOverview\SshKeyFingerprints', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\ApiOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ApiOverview($object),
            'ApiClients\Client\GitHub\Schema\ApiOverview\SshKeyFingerprints' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ApiOverview⚡️SshKeyFingerprints($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ApiOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ApiOverview);
        $result = [];

        $verifiablePasswordAuthentication = $object->verifiablePasswordAuthentication;
        after_verifiablePasswordAuthentication:        $result['verifiable_password_authentication'] = $verifiablePasswordAuthentication;

        
        $sshKeyFingerprints = $object->sshKeyFingerprints;

        if ($sshKeyFingerprints === null) {
            goto after_sshKeyFingerprints;
        }
        $sshKeyFingerprints = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ApiOverview⚡️SshKeyFingerprints($sshKeyFingerprints);
        after_sshKeyFingerprints:        $result['ssh_key_fingerprints'] = $sshKeyFingerprints;

        
        $sshKeys = $object->sshKeys;

        if ($sshKeys === null) {
            goto after_sshKeys;
        }
        static $sshKeysSerializer0;

        if ($sshKeysSerializer0 === null) {
            $sshKeysSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $sshKeys = $sshKeysSerializer0->serialize($sshKeys, $this);
        after_sshKeys:        $result['ssh_keys'] = $sshKeys;

        
        $hooks = $object->hooks;

        if ($hooks === null) {
            goto after_hooks;
        }
        static $hooksSerializer0;

        if ($hooksSerializer0 === null) {
            $hooksSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $hooks = $hooksSerializer0->serialize($hooks, $this);
        after_hooks:        $result['hooks'] = $hooks;

        
        $web = $object->web;

        if ($web === null) {
            goto after_web;
        }
        static $webSerializer0;

        if ($webSerializer0 === null) {
            $webSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $web = $webSerializer0->serialize($web, $this);
        after_web:        $result['web'] = $web;

        
        $api = $object->api;

        if ($api === null) {
            goto after_api;
        }
        static $apiSerializer0;

        if ($apiSerializer0 === null) {
            $apiSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $api = $apiSerializer0->serialize($api, $this);
        after_api:        $result['api'] = $api;

        
        $git = $object->git;

        if ($git === null) {
            goto after_git;
        }
        static $gitSerializer0;

        if ($gitSerializer0 === null) {
            $gitSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $git = $gitSerializer0->serialize($git, $this);
        after_git:        $result['git'] = $git;

        
        $packages = $object->packages;

        if ($packages === null) {
            goto after_packages;
        }
        static $packagesSerializer0;

        if ($packagesSerializer0 === null) {
            $packagesSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $packages = $packagesSerializer0->serialize($packages, $this);
        after_packages:        $result['packages'] = $packages;

        
        $pages = $object->pages;

        if ($pages === null) {
            goto after_pages;
        }
        static $pagesSerializer0;

        if ($pagesSerializer0 === null) {
            $pagesSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $pages = $pagesSerializer0->serialize($pages, $this);
        after_pages:        $result['pages'] = $pages;

        
        $importer = $object->importer;

        if ($importer === null) {
            goto after_importer;
        }
        static $importerSerializer0;

        if ($importerSerializer0 === null) {
            $importerSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $importer = $importerSerializer0->serialize($importer, $this);
        after_importer:        $result['importer'] = $importer;

        
        $actions = $object->actions;

        if ($actions === null) {
            goto after_actions;
        }
        static $actionsSerializer0;

        if ($actionsSerializer0 === null) {
            $actionsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $actions = $actionsSerializer0->serialize($actions, $this);
        after_actions:        $result['actions'] = $actions;

        
        $dependabot = $object->dependabot;

        if ($dependabot === null) {
            goto after_dependabot;
        }
        static $dependabotSerializer0;

        if ($dependabotSerializer0 === null) {
            $dependabotSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $dependabot = $dependabotSerializer0->serialize($dependabot, $this);
        after_dependabot:        $result['dependabot'] = $dependabot;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ApiOverview⚡️SshKeyFingerprints(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ApiOverview\SshKeyFingerprints);
        $result = [];

        $sha256Rsa = $object->sha256Rsa;

        if ($sha256Rsa === null) {
            goto after_sha256Rsa;
        }
        after_sha256Rsa:        $result['SHA256_RSA'] = $sha256Rsa;

        
        $sha256Dsa = $object->sha256Dsa;

        if ($sha256Dsa === null) {
            goto after_sha256Dsa;
        }
        after_sha256Dsa:        $result['SHA256_DSA'] = $sha256Dsa;

        
        $sha256Ecdsa = $object->sha256Ecdsa;

        if ($sha256Ecdsa === null) {
            goto after_sha256Ecdsa;
        }
        after_sha256Ecdsa:        $result['SHA256_ECDSA'] = $sha256Ecdsa;

        
        $sha256Ed25519 = $object->sha256Ed25519;

        if ($sha256Ed25519 === null) {
            goto after_sha256Ed25519;
        }
        after_sha256Ed25519:        $result['SHA256_ED25519'] = $sha256Ed25519;


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
