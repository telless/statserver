<?php

namespace App\Converter;

use App\DTO\Roi\RoiActionCommand;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;

class RoiCommandConverter implements ParamConverterInterface
{
    private $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    public function apply(Request $request, ParamConverter $configuration)
    {
        return $this->serializer->deserialize($request->getContent(), RoiActionCommand::class, 'json');
    }

    public function supports(ParamConverter $configuration)
    {
        return $configuration->getClass() === RoiActionCommand::class;
    }
}