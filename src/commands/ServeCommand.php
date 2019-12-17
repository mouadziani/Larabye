<?php
namespace Console\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;

class ServeCommand extends Command 
{
    protected $commandName = 'serve';
    protected $commandDescription = "Serve the application on the PHP development server";

    protected $commandOptionHost = "host"; 
    protected $commandOptionHostDescription = 'The host address to serve the application on.'; 
    
    protected $commandOptionPort = "port"; 
    protected $commandOptionPortDescription = 'The port to serve the application on.'; 

    private $basePath = REALROOT;
    
    protected function configure()
    {
        $this
            ->setName($this->commandName)
            ->setDescription($this->commandDescription)
            ->addOption(
                $this->commandOptionHost,
                null,
                InputOption::VALUE_OPTIONAL,
                $this->commandOptionHostDescription,
                'localhost'
             )
             ->addOption(
                $this->commandOptionPort,
                null,
                InputOption::VALUE_OPTIONAL,
                $this->commandOptionPortDescription,
                8000
             )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output) 
    {
        $serveStyle = new OutputFormatterStyle('black', 'green');
        $output->getFormatter()->setStyle('fire', $serveStyle);

        $host = $input->getOption($this->commandOptionHost);
        $port = $input->getOption($this->commandOptionPort);
        $base = $this->basePath;

        $output->writeln("<fire>                                                                   </>");
        $output->writeln("<fire>   Larabye development server started on <http://{$host}:{$port}/   </>");
        $output->writeln("<fire>                                                                   </>");
        $output->writeln(" ");
        
        passthru("php -S {$host}:{$port} -t {$base}\public");

        return 0;
    }

}