<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;
class ProductController extends Controller
{
    private $products = [
        ['id' => 1, 'name' => 'จักรยานแม่บ้าน',
            'description' => 'เติมเต็มทุกการเดินทาง ด้วยดีไซน์เรียบง่ายและทนทาน',
            'price' => '2,990',
            'image' => 'https://www.dohome.co.th/media/catalog/product/cache/e446f15aaa8dc66b80b7a0df334f7c5a/1/0/10317388_kan_1200_1.jpg'],
        ['id' => 2, 'name' => 'จักรยาน 4 ล้อ',
            'description' => 'จักรยานเริ่มต้น เหมาะสำหรับมือใหม่หัดขี่',
            'price' => '3,390',
            'image' => 'https://st.bigc-cs.com/cdn-cgi/image/format=webp,quality=90/public/media/catalog/product/09/88/8855951002809/8855951002809_1-20230602122546-.jpg'],
        ['id' => 3, 'name' => 'จักรยานเสือภูเขา',
            'description' => 'พร้อมลุยทุกเส้นทางกับจักรยานเสือภูเขาคุณภาพสูง',
            'price' => '7,500',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHynjAtpqKwvtfeWMxevOT3K5RfF4ZC5JPQA&s'],
        ['id' => 4, 'name' => 'จักรยานไฟฟ้าสำหรับเด็ก',
            'description' => 'ให้การเดินทางของลูกน้อยเต็มไปด้วยความสนุกและปลอดภัยกับจักรยานไฟฟ้าสำหรับเด็ก',
            'price' => '14,990',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSi1akWyBdNVqwuSyBT4jlYeaLw5bp7lzyHrcZsR_QNG90JA4bR2jvCrOsKam_usSXMf44&usqp=CAU'],
        ['id' => 5, 'name' => 'จักรยานเสือหมอบ',
            'description' => 'สัมผัสประสบการณ์การขี่ที่ไม่เหมือนใครและเตรียมพร้อมออกไปสัมผัสธรรมชาติในทุกการปั่น!',
            'price' => '169,000',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQl6EdQ4vm_o3KmJFt-KowDtacyt8x3fKqBTgQhmpCtLpOgZ6qCyoI0c6Ll_2nKJ9rb17A&usqp=CAU'],
        ['id' => 6, 'name' => 'จักรยานพับได้',
            'description' => 'สนุกกับการเดินทางได้ทุกที่ ทุกเวลา!',
            'price' => '2,990',
            'image' => 'https://th-test-11.slatic.net/p/82fbd5315402330bcb994818c884166f.jpg'],
        ['id' => 7, 'name' => 'จักรยานสไตล์วินเทจ',
            'description' => 'ย้อนยุคสู่ความคลาสสิกกับจักรยานสไตล์วินเทจ',
            'price' => '4,097',
            'image' => 'https://pim-cdn0.ofm.co.th/products/original/YA21919.png?v=20241001&x-image-process=image/format,webp'],
        ['id' => 8, 'name' => 'จักรยานไฟฟ้า',
            'description' => 'เริ่มเปลี่ยนการเดินทางให้สะดวกด้วยจักรยานไฟฟ้า!',
            'price' => '19,900',
            'image' => 'https://media.lifesmoving.co.th/media/catalog/product/cache/2/image/700x700/9df78eab33525d08d6e5fb8d27136e95/e/m/em3_1000x1000_1_1_2.jpg'],
        ['id' => 9, 'name' => 'จักรยานแม่บ้าน แบบมีเกียร์',
            'description' => 'เร็ว เเรง ถึงที่หมายไว โดยการสับเกียร์',
            'price' => '4,290',
            'image' => 'https://inwfile.com/s-dt/uphj46.png'],
        ['id' => 10, 'name' => 'จักรยานสำหรับเด็ก',
            'description' => 'เปิดโลกแห่งการผจญภัยกับจักรยานสำหรับเด็ก',
            'price' => '1,990',
            'image' => 'https://inwfile.com/s-dt/9zlr0l.png'],
        ['id' => 11, 'name' => 'จักรยานไฟฟ้า 3 ล้อ',
            'description' => 'ชีวิตสะดวกสบาย เคลื่อนตัวง่าย ปลอดภัยทุกเส้นทาง!',
            'price' => '18,900',
            'image' => 'https://image.makewebeasy.net/makeweb/m_1920x0/OhLREMjUx/493Max/493_Red.jpg?v=202405291424'],
        ['id' => 12, 'name' => 'จักรยานสำหรับเด็กมือใหม่',
            'description' => 'เติมเต็มความสนุกและพัฒนาการของลูกน้อย ด้วยจักรยานสำหรับเด็กมือใหม่!',
            'price' => '2,200',
            'image' => 'https://media.allonline.7eleven.co.th/pdmain/234013-00-allonline-hg.jpg'],
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    return Inertia::render('Products/Index', ['products' => $this->products // ส่งข้อมูลสินค้าที่ได้จากฐานข้อมูลไปยัง Vue component
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       $product = collect($this->products)->firstWhere('id',$id);
       if (!$product){
        abort(404, 'Product not found');
       }
       return Inertia::render('Products/Show', ['product'=> $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
