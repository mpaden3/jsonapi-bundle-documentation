<?php

namespace Mpaden\JsonApi\Command\Maker;

use Symfony\Bundle\MakerBundle\ConsoleStyle;
use Symfony\Bundle\MakerBundle\DependencyBuilder;
use Symfony\Bundle\MakerBundle\Generator;
use Symfony\Bundle\MakerBundle\InputConfiguration;
use Symfony\Bundle\MakerBundle\Maker\AbstractMaker;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class MakeApiDocumentation extends AbstractMaker
{
    public static function getCommandName(): string
    {
        return 'make:api:documentation';
    }

    public function configureCommand(Command $command, InputConfiguration $inputConfig)
    {
        // TODO: Implement configureCommand() method.
    }

    public function configureDependencies(DependencyBuilder $dependencies)
    {
        // TODO: Implement configureDependencies() method.
    }

    public function generate(InputInterface $input, ConsoleStyle $io, Generator $generator)
    {
        $ss = new SymfonyStyle($input,$io->getOutput());
        $ss->success("I did something!");
    }
}
