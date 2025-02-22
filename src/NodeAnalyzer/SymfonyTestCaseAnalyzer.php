<?php

declare(strict_types=1);

namespace Rector\Symfony\NodeAnalyzer;

use PhpParser\Node;
use PHPStan\Reflection\ClassReflection;
use Rector\Reflection\ReflectionResolver;

final class SymfonyTestCaseAnalyzer
{
    public function __construct(
        private readonly ReflectionResolver $reflectionResolver
    ) {
    }

    public function isInWebTestCase(Node $node): bool
    {
        $classReflection = $this->reflectionResolver->resolveClassReflection($node);
        if (! $classReflection instanceof ClassReflection) {
            return false;
        }

        return $classReflection->isSubclassOf('Symfony\Bundle\FrameworkBundle\Test\WebTestCase');
    }

    public function isInKernelTestCase(Node $node): bool
    {
        $classReflection = $this->reflectionResolver->resolveClassReflection($node);
        if (! $classReflection instanceof ClassReflection) {
            return false;
        }

        return $classReflection->isSubclassOf('Symfony\Bundle\FrameworkBundle\Test\KernelTestCase');
    }
}
