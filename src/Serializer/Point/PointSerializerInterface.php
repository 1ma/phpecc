<?php

namespace Mdanter\Ecc\Serializer\Point;

use Mdanter\Ecc\PointInterface;
use Mdanter\Ecc\CurveFpInterface;

interface PointSerializerInterface
{
    /**
     *
     * @param  PointInterface $point
     * @return string
     */
    public function serialize(PointInterface $point);

    /**
     * @param CurveFpInterface Curve that contains the serialized point
     *
     * @param  string         $string
     * @return PointInterface
     */
    public function unserialize(CurveFpInterface $curve, $string);
}
