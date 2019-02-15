<?php

interface CarCouponGenerator
{
    function addSeasonDiscount();
    function addStockDiscount();
}

///this class implements the interface for BMW
class BmwCouponGenerator implements CarCouponGenerator
{
    private $discount = 0;
    private $isHighSeason = false;
    private $bigStock = true;

    public function addSeasonDiscount()
    {
        if($this->isHighSeason) {
            return $this->discount += 5;
        }

        return $this->discount +=0;
    }

    public function addStockDiscount ()
    {
        if($this->bigStock) {
            return $this->discount +=7;
        }

        return $this->discount +=0;
    }

}

class MercedesCouponGenerator implements CarCouponGenerator
{
    private $discount = 0;
    private $isHighSeason = false;
    private $bigStock = true;

    public function addSeasonDiscount()
    {
        if($this->isHighSeason) {
            return $this->discount += 4;
        }

        return $this->discount += 0;
    }


    public function addStockDiscount()
    {
        if($this->bigStock) {
            return $this->discount +=10;
        }

        return $this->discount +=0;
    }

}

function couponObjectGenerator($car)
{
    if ($car == "bmw") {
        $car_obj = new BmwCouponGenerator;
    }

    elseif ($car == "mercedes") {
        $car_obj = new MercedesCouponGenerator;
    }

    return $car_obj;
}

class CouponGenerator
{

    private $car_coupon;

    public function __construct(CarCouponGenerator $car_coupon)
    {
        $this->car_coupon = $car_coupon;
    }

    public function getCoupon()
    {
        $discount = $this->car_coupon->addSeasonDiscount();
        $discount = $this->car_coupon->addStockDiscount();

        return $coupon = "Get $discount % off the price of your new car !";
    }
}

$car = 'mercedes';
$car_obj = couponObjectGenerator($car);
$coupon_generator = new CouponGenerator($car_obj);
echo $coupon_generator->getCoupon();

 ?>
