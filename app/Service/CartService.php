<?php

namespace App\Service;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use function Symfony\Component\Translation\t;

class CartService
{

    protected $cart;

    public function __construct()
    {
        $this->cart = session()->get('cart') ?? collect([]);
    }

    /**
     * @param array $value
     * @param $obj
     * @return $this
     */
    public function put(array $value, $obj = null)
    {
        if (!is_null($obj) && $obj instanceof Model) {
            $value = array_merge($value, [
                'id' => Str::random(10),
                'productInfo' => $obj,
            ]);
        }
        $this->cart->put($value['id'], $value);
        session()->put('cart', $this->cart);
        return $this;
    }


    /**
     * @param $key
     * @return bool
     */
    public function has($key)
    {
        if ($key instanceof Model) {
            return !is_null(
                $this->cart->where('productInfo', $key)->first()
            );
        }
    }

    /**
     * @param $key
     * @return mixed|null
     */
    public function get($key)
    {
        $item = $key instanceof Model
            ? $this->cart->where('productInfo', $key)->first()
            : false;

        return $item;
    }


    /**
     * @return \Closure|Collection|mixed|object
     */
    public function all()
    {
        return $cart = $this->cart;
    }

    public function delete($key)
    {
        if ($key instanceof Model) {
            $this->cart = $this->cart->filter(function ($item) use ($key) {
                return ($item['productInfo'] != $key);
            });
            session()->put('cart', $this->cart);
            return true;
        }
        return false;
    }

    /**
     * @param $key
     * @return bool
     */


    public function updateProductCount($key)
    {
        if ($key instanceof Model) {
            $this->cart = $this->cart->map(function ($item) use ($key) {
                if ($item['productInfo'] == $key) {
                    $item['count']++;
                }
                return $item;
            });
            session()->put('cart', $this->cart);
            return true;
        }
        return false;
    }
}
