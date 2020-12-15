<?php

namespace App\models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class WareProcess extends Model
{
   protected $table = 'ware_process';

    protected $fillable = [
        'ware_id',
        'product_id',
        'count',
        'created_expense',
        'created_income',
        'status',
        'clent_id',
    ];

    public static function add($filds)
    {
        $post = new static;
        $post->fill($filds);
        $post['created_expense'] = date('Y-m-d h:i:s',time());

        $ware_count = WareItem::getCount($post['ware_id']);
        if (intval($ware_count)>=$post['count']) {
            $ware_item = WareItem::where('ware_id',$post['ware_id'])->first();
            $ware_item->item_count = intval($ware_count)-$post['count'];
            $ware_item->save();
            $post->save();
        }
    }
    public function edit($filds)
    {
        $this->fill($filds); 
        $this->save();
    }

    public function getWare()
    {
        if (!empty(Ware::find($this->ware_id))) {
            return Ware::find($this->ware_id)->name;
        }

        return "No ware";
    }

    public function getProduct()
    {
        if (!empty(Product::find($this->product_id))) {
            return Product::find($this->product_id)->name;
        }

        return "No product";
    }

    public function getClent()
    {
        if (!empty(User::find($this->clent_id))) {
            return User::find($this->clent_id)->name;
        }

        return "No product";
    }

    public function getStatus($status)
    {
        switch ($status) {
            case 'expense':
                $data = 'Chiqim';
                break;
            case 'income':
                $data = 'Kirim';
                break;
            
            default:
                $data = 'No status';
                break;
        }

        return $data;
    }

}
