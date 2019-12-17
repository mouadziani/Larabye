<?php
namespace Console\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ClearcacheCommand extends Command 
{
    protected $commandName = 'clear:cache';
    protected $commandDescription = "Clears the application cache.";

    protected $commandHelpDescription = "Allows you to delete the application cache. Pass the --groups parameter to clear caches of specific groups.";

    protected function configure()
    {
        $this->setName($this->commandName)
            ->setDescription($this->commandDescription)
            ->setHelp($this->commandHelpDescription);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Cache is about to cleared...');
 
        clearstatcache();
        $output->writeln('All caches are cleared.');
        $output->writeln('Complete.');

        return 0;
    }
}