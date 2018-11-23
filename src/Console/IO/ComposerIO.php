<?php
namespace EugeneZenko\CodeBeast\Console\IO;

use Composer\IO\IOInterface;

class ComposerIO extends Base
{
    /**
     * @var \Composer\IO\IOInterface
     */
    private $io;

    /**
     * ComposerIO constructor.
     *
     * @param \Composer\IO\IOInterface $io
     */
    public function __construct(IOInterface $io)
    {
        $this->io = $io;
    }

    /**
     * {@inheritDoc}
     */
    public function isInteractive()
    {
        return $this->io->isInteractive();
    }

    /**
     * {@inheritDoc}
     */
    public function isVerbose()
    {
        return $this->io->isVerbose();
    }

    /**
     * {@inheritDoc}
     */
    public function isVeryVerbose()
    {
        return $this->io->isVeryVerbose();
    }

    /**
     * {@inheritDoc}
     */
    public function isDebug()
    {
        return $this->io->isDebug();
    }

    /**
     * {@inheritDoc}
     */
    public function write($messages, $newline = true, $verbosity = self::NORMAL)
    {
        $this->io->write($messages, $newline, $verbosity);
    }

    /**
     * {@inheritDoc}
     */
    public function writeError($messages, $newline = true, $verbosity = self::NORMAL)
    {
        $this->io->writeError($messages, $newline, $verbosity);
    }

    /**
     * {@inheritDoc}
     */
    public function ask($question, $default = null)
    {
        return $this->io->ask($question, $default);
    }

    /**
     * {@inheritDoc}
     */
    public function askConfirmation($question, $default = true)
    {
        return $this->io->askConfirmation($question, $default);
    }

    /**
     * {@inheritDoc}
     */
    public function askAndValidate($question, $validator, $attempts = null, $default = null)
    {
        return $this->io->askAndValidate($question, $validator, $attempts, $default);
    }
}
