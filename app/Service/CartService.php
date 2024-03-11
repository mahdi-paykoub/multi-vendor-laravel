<?php

namespace App\Service;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use function Symfony\Component\Translation\t;

class CartService
{

    protected $cart;
    protected $response;

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
            $this->cart = $this->cart->map(function ($item) use ($key) {
                if ($item['productInfo'] == $key) {
                    if ($item['count'] == 1) {
                        return false;
                    } elseif ($item['count'] > 1) {
                        $item['count']--;
                        $this->response = [
                            'count' => $item['count'],
                            'price' => $item['productInfo']['price'],
                            'productId' => $item['productInfo']['id'],
                        ];
                    }
                }
                return $item;
            });
            $this->cart = $this->cart->filter(function ($item) {
                return $item != false;
            });
            session()->put('cart', $this->cart);
            return $this->response;
        }
        return false;
    }


    /**
     * @param $key
     * @return false|Application|ResponseFactory|\Illuminate\Foundation\Application|Response
     */
    public function updateProductCount($key)
    {
        if ($key instanceof Model) {
            $this->cart = $this->cart->map(function ($item) use ($key) {
                if ($item['productInfo'] == $key) {
                    $item['count']++;
                    $this->response = [
                        'count' => $item['count'],
                        'price' => $item['productInfo']['price'],
                        'productId' => $item['productInfo']['id'],
                    ];
                }
                return $item;
            });
            session()->put('cart', $this->cart);
            return response($this->response);
        }
        return false;
    }

    public function count()
    {
        if ($this->cart->count()) {
            $sum_count = $this->cart->sum(function ($item) {
                return $item['count'];
            });
            return $sum_count;
        }
        return false;
    }
}
