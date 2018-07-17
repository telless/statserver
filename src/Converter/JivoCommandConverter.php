<?php

namespace App\Converter;

use App\DTO\Jivo\JivoActionCommand;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;

class JivoCommandConverter implements ParamConverterInterface
{
    private $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    public function apply(Request $request, ParamConverter $configuration)
    {
        $command = $this->serializer->deserialize($request->getContent(), JivoActionCommand::class, 'json');
        // TODO валидировать команду
        $request->attributes->set($configuration->getName(), $command);
    }

    public function supports(ParamConverter $configuration)
    {
        return $configuration->getClass() === JivoActionCommand::class;
    }
}