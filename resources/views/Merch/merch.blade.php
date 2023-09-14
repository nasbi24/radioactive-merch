<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3a9b6894e0.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Radioactive UMN</title>
    @vite('resources/css/app.css')
</head>

<body class="overflow-x-hidden bg-black">
    <nav id="header" class="fixed navbar bg-transparent justify-center gap-16 z-40 transition-all duration-700">
        <a class="font-taruno text-white text-xs underline underline-offset-4 decoration-[#FFF000] cursor-pointer"
            href="/">HOME</a>
        <a
            class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">VO
            CHALLENGE</a>
        <a
            class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">RAC</a>
        <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer"
            href="ticket">CLOSING
            NIGHT</a>
        @auth
            <a class="font-taruno text-white text-xs no-underline hover:underline cursor-pointer" href="/logout">LOGOUT</a>
        @endauth
    </nav>
    <div class="grid justify-center">
        <div class="flex items-center gap-20 pt-[11rem] flex-wrap justify-center">
            <div id="indicators-carousel" class="relative w-[350px] h-[400px] justify-center" data-carousel="static">
                <div class="m-auto relative overflow-hidden w-5/6 h-full rounded-lg border-[1px] border-white">

                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src=" " class="absolute block w-full object-fill">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src=" " class="absolute block w-full object-contain">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src=" " class="absolute block w-full object-contain">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src=" " class="absolute block w-full object-contain">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src=" " class="absolute block w-full object-contain">
                    </div>
                </div>
                <div class="z-30 flex gap-4 overflow-hidden justify-center mt-[20px]">
                    <img type="button" class="w-[50px] h-[70px] border-[1px] border-white" aria-current="true"
                        aria-label="Slide 1" data-carousel-slide-to="0" src="images/merch1.jpg" />
                    <img type="button" class="w-[50px] h-[70px] border-[1px] border-white" aria-current="true"
                        aria-label="Slide 2" data-carousel-slide-to="1" src=" " />
                    <img type="button" class="w-[50px] h-[70px] border-[1px] border-white" aria-current="true"
                        aria-label="Slide 3" data-carousel-slide-to="2" src=" " />
                    <img type="button" class="w-[50px] h-[70px] border-[1px] border-white" aria-current="true"
                        aria-label="Slide 4" data-carousel-slide-to="3" src=" " />
                </div>

                <button type="button"
                    class="absolute top-0 left-5 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full dark:group-hover:bg-gray-800/60">
                        <svg class="w-4 h-4 text-white dark:text-gray-600" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 right-5 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full dark:group-hover:bg-gray-800/60 ">
                        <svg class="w-4 h-4 text-white dark:text-gray-600" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
            <div class="grid gap-3">
                <div class="mt-5">
                    <p class="mt-5 font-taruno text-white text-lg">{{ $merch->name }}</p>
                    @if ($merch->id == 3)
                        <p class="text-[11px] font-taruno text-gray-500"><i>Illustrated by Radioactive</i></p>
                    @endif
                    @if ($merch->id == 4)
                        <p class="text-[11px] font-taruno text-gray-500"><i>With Zipper</i></p>
                    @endif
                </div>
                <p class="mt-1 font-sans text-gray-500 text-xs">Stock {{ $merch->stock }}</p>
                <p class="mt-1 font-sans text-white text-sm">Rp {{ $merch->price }}</p>
                <div id="indicators-carousel" class="relative w-full h-full" data-carousel="static">
                    <div class="z-30 inline-flex gap-4 h-3 overflow-hidden justify-center mt-[20px]">
                        <div type="button"
                            class="h-[2px] w-[126px] cursor-pointer no-underline text-white font-taruno text-[13px]"
                            data-carousel-slide-to="0" class="relative">
                            <p class="absolute top-1">Description</p>
                        </div>
                        <div type="button"
                            class="h-[2px] w-[100px] cursor-pointer no-underline text-white font-taruno text-[13px]"
                            data-carousel-slide-to="1" class="relative">
                            <p class="absolute top-1">Shipping</p>
                        </div>

                    </div>
                    <div class="relative w-full h-[110px] overflow-hidden">

                        <div class="hidden duration-700 ease-in-out" data-carousel-item="">
                            @if ($merch->id == 6 || $merch->id == 7 || $merch->id == 8)
                                <p class="text-white text-[17px]"><i>What will you get?</i></p>
                            @endif
                            <ul class="list-disc ml-[17px]">
                                {{-- codingan desc produk --}}
                                @if ($merch->id == 1)
                                    <li class="text-white text-[15px]">Premium soft cotton combed 24s</li>
                                    <li class="text-white text-[15px]">Oversized cut and easy to wear</li>
                                    <li class="text-white text-[15px]">6 sizes XS - XXL</li>
                                    <li class="text-white text-[15px]">Model is 170cm and wearing size M</li>
                                    </li>
                                @endif
                                @if ($merch->id == 2)
                                    <li class="text-white text-[15px]">Premium soft cotton combed 24s</li>
                                    <li class="text-white text-[15px]">Regular cut and easy to wear</li>
                                    <li class="text-white text-[15px]">7 sizes S - 4XL</li>
                                    <li class="text-white text-[15px]">Model is 155cm and wearing size M</li>
                                @endif
                                @if ($merch->id == 3)
                                    <li class="text-white text-[15px]">Size: A6</li>
                                    <li class="text-white text-[15px]">Material: <i>Glossy Finish</i></li>
                                    <li class="text-white text-[15px]">Type: <i>Kisscut</i></li>
                                @endif
                                @if ($merch->id == 4)
                                    <li class="text-white text-[15px]">Material: <i>Canvas Twill</i></li>
                                    <li class="text-white text-[15px]">Size: 40cm × 33 × 7cm</li>
                                @endif
                                @if ($merch->id == 5)
                                    <li class="text-white text-[15px]">Material: <i>Stainless Steel</i></li>
                                    <li class="text-white text-[15px]">Capacity: 380ml</i></li>
                                    <li class="text-white text-[15px]">Weight: 200g</li>
                                    <li class="text-white text-[15px]">Dimension: 6cm × 8cm × 12cm</li>
                                @endif
                                @if ($merch->id == 6)
                                    <li class="text-white text-[15px]">Revolution Tote Bag</i></li>
                                    <li class="text-white text-[15px]">Revy Eggo Tumbler</li>
                                    <li class="text-white text-[15px]">Revolution Sticker Pack</li>
                                @endif
                                @if ($merch->id == 7 || $merch->id == 8)
                                    <li class="text-white text-[15px]">Revolution Tote Bag</i></li>
                                    <li class="text-white text-[15px]">Revolution Tote Bag</li>
                                    <li class="text-white text-[15px]">Revolution Sticker Pack</li>
                                @endif
                                @if ($merch->id == 8)
                                    <li class="text-white text-[15px]">Revy Eggo Tumbler</li>
                                @endif

                            </ul>
                        </div>
                        <div class="hidden duration-700 ease-in-out w-full" data-carousel-item>
                            <ul class="list-disc ml-[17px]">
                                <li class="text-white text-[15px]">Pesanan diproses kurang lebih 7 hari setelah order
                                    dikonfirmasi</li>
                                <li class="text-white text-[15px]">Pesanan melalui website HANYA berlaku untuk
                                    pengambilan di UMN</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <form class="grid gap-6" action="{{ url('/cart/' . $merch->id) }}" method="post">
                        @if ($merch->id == 7 || $merch->id == 8)
                            <div class=" w-full">
                                <p class="text-white font-pathway font-bold italic">Choose ONE of your favorite
                                    tee!</p>
                                <div class="flex flex-col gap-1">
                                    <div class="flex">
                                        <input id="tee" name="tee" type="radio"
                                            value="Turbulent Revolution Tee">
                                        <label for="tee" class="text-white">Turbulent Revolution Tee</label>
                                    </div>
                                    <div class="flex">
                                        <input id="tee" name="tee" type="radio"
                                            value="Celestial Revy Tee">
                                        <label for="tee" class="text-white">Celestial Revy Tee</label>
                                    </div>

                                    <p class="text-white font-pathway font-bold italic">Choose ONE of your
                                        favorite tee!
                                    </p>
                                    <div class="flex gap-2">
                                        <div class="flex">
                                            <input id="size" name="size" type="radio" value="S">
                                            <label for="size" class="text-white">S</label>
                                        </div>
                                        <div class="flex">
                                            <input id="size" name="size" type="radio" value="M">
                                            <label for="size" class="text-white">M</label>
                                        </div>
                                        <div class="flex">
                                            <input id="size" name="size" type="radio" value="L">
                                            <label for="size" class="text-white">L</label>
                                        </div>
                                        <div class="flex">
                                            <input id="size" name="size" type="radio" value="XL">
                                            <label for="size" class="text-white">XL</label>
                                        </div>
                                    </div>


                                    {{-- <select name="tee" id="tee"
                                        class="w-full h-10 mt-1 text-center font-taruno text-[.8rem] text-black cursor-pointer">
                                        <option value="Turbulent Revolution Tee">Turbulent Revolution Tee</option>
                                        <option value="Celestial Revy Tee">Celestial Revy Tee</option>
                                    </select>
                                    <select name="size1" id="size1"
                                        class="w-[60px] h-10 mt-1 text-center font-taruno text-[.8rem] text-black cursor-pointer">
                                        <option value="XS">XS</option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                    </select>

                                    <select name="size2" id="size2"
                                        class="w-[60px] hidden h-10 mt-1 text-center font-taruno text-[.8rem] text-black cursor-pointer">
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                        <option value="2XL">2XL</option>
                                        <option value="3XL">3XL</option>
                                    </select> --}}
                                </div>
                            </div>
                </div>
                @endif
                <div class="inline-flex justify-center w-full gap-3" action="" method="post">
                    @csrf
                    <input type="button" value="-" id="decrement"
                        class="border-[1px] border-white w-[45px] h-[45px] p-3 text-xs text-white bg-[#0E0EC0] cursor-pointer"
                        onclick="button(this)"></input>

                    <input id="qty" type="number" name="qty" min="1" max="{($merch->stock)}"
                        value="1" step="1" readonly class="p-2 text-lg"></input>

                    <input type="button" value="+" id="increment"
                        class="border-[1px] border-white w-[45px] h-[45px] p-3 text-xs text-white bg-[#0E0EC0] cursor-pointer"
                        onclick="button(this)"></input>
                    @if ($merch->table && $merch->id == 1)
                        <select name="size" id="size1"
                            class="w-[60px] text-center font-taruno text-[.8rem] text-white cursor-pointer">
                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                    @endif
                    @if ($merch->table && $merch->id == 2)
                        <select name="size" id="size2"
                            class="w-[60px] text-center font-taruno text-[.8rem] text-white cursor-pointer">
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="2XL">2XL</option>
                            <option value="3XL">3XL</option>
                        </select>
                    @endif
                </div>

                <div class="grid gap-3">
                    <input type="hidden" name="id" value="{{ $merch->id }}">
                    <input value="Add to Cart" type="submit"
                        class="w-full font-taruno border-solid border-[1px] border-white p-3 text-xs text-white bg-[#0E0EC0] cursor-pointer"></input>
                    <a href="{{ url('/merch') }}"
                        class="text-center font-taruno border-solid border-[1px] border-white p-3 text-xs text-white bg-[#0E0EC0] no-underline cursor-pointer">Back
                        to Merch</a>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <div class="mt-[100px] flex justify-center w-full align-middle">
        <div class="text-left">
            <h2 class="font-taruno text-white">NOTES</h2>
            <ul class="list-disc ml-[17px]">
                <li class="text-white text-[15px]">TIDAK MENERIMA SEGALA JENIS BENTUK PENUKARAN TERMASUK
                    PENUKARAN MODEL, WARNA, DAN SIZE

                </li>
                <li class="text-white text-[15px]">TIDAK MENERIMA PENGEMBALIAN DANA ATAS PESANAN YANG
                    TELAH DILAKUKAN</li>
            </ul>
        </div>
    </div>
    <div class="mt-[80px] flex justify-center text-center w-full align-middle">
        @if ($merch->table && $merch->id == 1)
            <table border="1" cellpadding="10" class="border-white border-[1px] w-4/5 lg:w-1/2">
                <tr class="border-[1px] bg-[#0E0EC0]">
                    <th>Size</th>
                    <th>Width<br>(cm)</th>
                    <th>Length<br>(cm)</th>
                    <th>Shoulders<br>(cm)</th>
                    <th>Hands<br>(cm)</th>
                    <th>Harga<br>(Rp)</th>
                </tr>
                <tr>
                    <td>XS</td>
                    <td>54</td>
                    <td>69</td>
                    <td>15</td>
                    <td>25</td>
                    <td>95 000</td>
                </tr>
                <tr>
                    <td>S</td>
                    <td>57</td>
                    <td>72</td>
                    <td>16</td>
                    <td>25</td>
                    <td>95 000</td>
                </tr>
                <tr>
                    <td>M</td>
                    <td>59</td>
                    <td>73</td>
                    <td>16</td>
                    <td>29</td>
                    <td>95 000</td>
                </tr>
                <tr>
                    <td>L</td>
                    <td>62</td>
                    <td>76</td>
                    <td>17</td>
                    <td>31</td>
                    <td>95 000</td>
                </tr>
                <tr>
                    <td>XL</td>
                    <td>66</td>
                    <td>78</td>
                    <td>17</td>
                    <td>33</td>
                    <td>95 000</td>
                </tr>
                <tr>
                    <td>XXL</td>
                    <td>70</td>
                    <td>80</td>
                    <td>19</td>
                    <td>31</td>
                    <td>105 000</td>
                </tr>
            </table>
        @endif
        @if ($merch->table && $merch->id == 2)
            <table border="1" cellpadding="10" class="border-white border-[1px] w-1/2">
                <tr class="border-[1px] bg-[#0E0EC0]">
                    <th>Size</th>
                    <th>Width<br>(cm)</th>
                    <th>Length<br>(cm)</th>
                    <th>Price<br>(Rp)</th>
                </tr>
                <tr>
                    <td>S</td>
                    <td>47</td>
                    <td>70</td>
                    <td>95 000</td>
                </tr>
                <tr>
                    <td>M</td>
                    <td>51</td>
                    <td>71</td>
                    <td>95 000</td>
                </tr>
                <tr>
                    <td>L</td>
                    <td>55</td>
                    <td>73</td>
                    <td>95 000</td>
                </tr>
                <tr>
                    <td>XL</td>
                    <td>59</td>
                    <td>76</td>
                    <td>95 000</td>
                </tr>
                <tr>
                    <td>2XL</td>
                    <td>64</td>
                    <td>80</td>
                    <td>100 000</td>
                </tr>
                <tr>
                    <td>3XL</td>
                    <td>67</td>
                    <td>83</td>
                    <td>105 000</td>
                </tr>
                <tr>
                    <td>4XL</td>
                    <td>70</td>
                    <td>86</td>
                    <td>110 000</td>
                </tr>
            </table>
        @endif
    </div>



    <!-- Footer -->
    <footer class="bg-gradient-to-b from-transparent to-[#0E0EC0] pt-56 pb-16">
        <div class="flex flex-col w-full justify-center md:items-center md:flex-row">
            <div class="flex justify-center lg:container w-full">
                <img src="/images/LOGO RA.webp" alt="" class="h-40 object-contain">
            </div>
            <div class="lg:container flex flex-col justify-evenly py-3 my-10 gap-4 text-center md:text-left">
                <a href="/"
                    class="no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">
                    <h5 class="text-xs font-taruno font-medium text-white">
                        <b>HOME</b>
                    </h5>
                </a>
                <a href="#"
                    class="no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">
                    <h5 class="text-xs font-taruno font-medium text-white">
                        <b>VO CHALLENGE</b>
                    </h5>
                </a>
                <a href="#"
                    class="no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">
                    <h5 class="text-xs font-taruno font-medium text-white">
                        <b>RAC</b>
                    </h5>
                </a>
                <a href="#"
                    class="no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">
                    <h5 class="text-xs font-taruno font-medium text-white">
                        <b>CLOSING NIGHT</b>
                    </h5>
                </a>
            </div>
            <div class="mx-auto flex flex-wrap content-center mb-12 md:mb-0">
                <div class="flex space-x-4 mt-4 sm:mt-0">
                    <a href="mailto:mediarelation.radioactive@gmail.com" target="_blank" class="text-white">
                        <svg class="h-12 w-12 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M18.821,20.5H5.179A3.683,3.683,0,0,1,1.5,16.821V7.179A3.683,3.683,0,0,1,5.179,3.5H18.821A3.683,3.683,0,0,1,22.5,7.179v9.642A3.683,3.683,0,0,1,18.821,20.5ZM5.179,4.5A2.682,2.682,0,0,0,2.5,7.179v9.642A2.682,2.682,0,0,0,5.179,19.5H18.821A2.682,2.682,0,0,0,21.5,16.821V7.179A2.682,2.682,0,0,0,18.821,4.5Z">
                            </path>
                            <path
                                d="M12,14.209a.5.5,0,0,1-.346-.138L4.286,7.028a.5.5,0,0,1,.691-.723L12,13.018l7.023-6.713a.5.5,0,1,1,.691.723l-7.368,7.043A.5.5,0,0,1,12,14.209Z">
                            </path>
                            <path
                                d="M4.7,17.833a.5.5,0,0,1-.347-.86l5.54-5.31a.5.5,0,0,1,.692.722L5.048,17.694A.5.5,0,0,1,4.7,17.833Z">
                            </path>
                            <path
                                d="M19.3,17.832a.5.5,0,0,1-.346-.139l-5.538-5.308a.5.5,0,0,1,.692-.722l5.538,5.308a.5.5,0,0,1-.346.861Z">
                            </path>
                        </svg>
                    </a>
                    <a href="https://instagram.com/umnradioactive" target="_blank" class="text-white">
                        <svg class="h-12 w-12 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M21.938,7.71a7.329,7.329,0,0,0-.456-2.394,4.615,4.615,0,0,0-1.1-1.694,4.61,4.61,0,0,0-1.7-1.1,7.318,7.318,0,0,0-2.393-.456C15.185,2.012,14.817,2,12,2s-3.185.012-4.29.062a7.329,7.329,0,0,0-2.394.456,4.615,4.615,0,0,0-1.694,1.1,4.61,4.61,0,0,0-1.1,1.7A7.318,7.318,0,0,0,2.062,7.71C2.012,8.814,2,9.182,2,12s.012,3.186.062,4.29a7.329,7.329,0,0,0,.456,2.394,4.615,4.615,0,0,0,1.1,1.694,4.61,4.61,0,0,0,1.7,1.1,7.318,7.318,0,0,0,2.393.456c1.1.05,1.472.062,4.29.062s3.186-.012,4.29-.062a7.329,7.329,0,0,0,2.394-.456,4.9,4.9,0,0,0,2.8-2.8,7.318,7.318,0,0,0,.456-2.393c.05-1.1.062-1.472.062-4.29S21.988,8.814,21.938,7.71Zm-1,8.534a6.351,6.351,0,0,1-.388,2.077,3.9,3.9,0,0,1-2.228,2.229,6.363,6.363,0,0,1-2.078.388C15.159,20.988,14.8,21,12,21s-3.159-.012-4.244-.062a6.351,6.351,0,0,1-2.077-.388,3.627,3.627,0,0,1-1.35-.879,3.631,3.631,0,0,1-.879-1.349,6.363,6.363,0,0,1-.388-2.078C3.012,15.159,3,14.8,3,12s.012-3.159.062-4.244A6.351,6.351,0,0,1,3.45,5.679a3.627,3.627,0,0,1,.879-1.35A3.631,3.631,0,0,1,5.678,3.45a6.363,6.363,0,0,1,2.078-.388C8.842,3.012,9.205,3,12,3s3.158.012,4.244.062a6.351,6.351,0,0,1,2.077.388,3.627,3.627,0,0,1,1.35.879,3.631,3.631,0,0,1,.879,1.349,6.363,6.363,0,0,1,.388,2.078C20.988,8.841,21,9.2,21,12S20.988,15.159,20.938,16.244Z">
                            </path>
                            <path d="M17.581,5.467a.953.953,0,1,0,.952.952A.954.954,0,0,0,17.581,5.467Z"></path>
                            <path
                                d="M12,7.073A4.927,4.927,0,1,0,16.927,12,4.932,4.932,0,0,0,12,7.073Zm0,8.854A3.927,3.927,0,1,1,15.927,12,3.932,3.932,0,0,1,12,15.927Z">
                            </path>
                        </svg>
                    </a>
                    <a href="https://tiktok.com/@umnradioactive" target="_blank" class="text-white">
                        <svg class="h-12 w-12 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M9.37,23.5a7.468,7.468,0,0,1,0-14.936.537.537,0,0,1,.538.5v3.8a.542.542,0,0,1-.5.5,2.671,2.671,0,1,0,2.645,2.669.432.432,0,0,1,0-.05V1a.5.5,0,0,1,.5-.5h3.787a.5.5,0,0,1,.5.5A4.759,4.759,0,0,0,21.59,5.76a.5.5,0,0,1,.5.5L22.1,10a.533.533,0,0,1-.519.515,9.427,9.427,0,0,1-4.741-1.268v6.789A7.476,7.476,0,0,1,9.37,23.5ZM8.908,9.585a6.466,6.466,0,1,0,6.93,6.447V8.326a.5.5,0,0,1,.791-.407A8.441,8.441,0,0,0,21.1,9.5l-.006-2.76A5.761,5.761,0,0,1,15.859,1.5H13.051V16.032a.458.458,0,0,1,0,.053,3.672,3.672,0,1,1-4.14-3.695Z">
                            </path>
                        </svg>
                    </a>
                    <a href="https://youtube.com/channel/UCeVl4fsOVkU7yVCurgoq5Lg" target="_blank"
                        class="text-white">
                        <svg class="h-12 w-12 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M12,20.55c-.3,0-7.279-.006-9.115-.5A3.375,3.375,0,0,1,.5,17.665,29.809,29.809,0,0,1,0,12,29.824,29.824,0,0,1,.5,6.334,3.375,3.375,0,0,1,2.885,3.948c1.836-.492,8.819-.5,9.115-.5s7.279.006,9.115.5A3.384,3.384,0,0,1,23.5,6.334,29.97,29.97,0,0,1,24,12a29.97,29.97,0,0,1-.5,5.666,3.384,3.384,0,0,1-2.388,2.386C19.279,20.544,12.3,20.55,12,20.55Zm0-16.1c-.072,0-7.146.006-8.857.464A2.377,2.377,0,0,0,1.464,6.593,29.566,29.566,0,0,0,1,12a29.566,29.566,0,0,0,.464,5.407,2.377,2.377,0,0,0,1.679,1.679c1.711.458,8.785.464,8.857.464s7.146-.006,8.857-.464a2.377,2.377,0,0,0,1.679-1.679A29.66,29.66,0,0,0,23,12a29.66,29.66,0,0,0-.464-5.407h0a2.377,2.377,0,0,0-1.679-1.679C19.146,4.456,12.071,4.45,12,4.45ZM9.7,15.95a.5.5,0,0,1-.5-.5V8.55a.5.5,0,0,1,.75-.433l5.975,3.45a.5.5,0,0,1,0,.866L9.95,15.883A.5.5,0,0,1,9.7,15.95Zm.5-6.534v5.168L14.675,12Z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex justify-center md:justify-end items-center w-full mb-10 md:mb-0">
                <img src="/images/LOGO UMN RADIO.webp" alt="" class="h-12 lg:h-16">
            </div>
            <div class="flex justify-center w-full">
                <img src="/images/LOGO UMN.webp" alt="" class="h-36 lg:h-40">
            </div>

        </div>
        <div class="flex justify-center align-middle mt-10 text-center">
            <p class="mb-2 text-xs font-taruno font-medium text-white">&copy; UMN RADIOACTIVE 2023</p>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    <script>
        window.addEventListener('scroll', function() {
            if (window.scrollY > 0) {
                header.classList.remove('bg-transparent');
                header.classList.add('bg-[#0E0EC0]');
                // header.classList.add('fixed');
            } else {
                header.classList.add('bg-transparent');
                header.classList.remove('bg-[#0E0EC0]');
                // header.classList.remove('fixed');
            }
        });
        const Input = document.getElementById("qty");

        function button(btn) {
            let id = btn.getAttribute("id");
            let min = Input.getAttribute("min");
            let step = Input.getAttribute("step");
            let val = Input.getAttribute("value");

            var stockValue = <?php echo $merch->stock; ?>;

            let calcStep = (id == "increment") ? (step * 1) : (step * -1);
            let newValue = parseInt(val) + calcStep;

            if (newValue >= min && newValue <= stockValue) {
                Input.setAttribute("value", newValue);
            }
        }

        const teeSelect = document.getElementById('tee');
        const size1Select = document.getElementById('size1');
        const size2Select = document.getElementById('size2');
        teeSelect.addEventListener('change', function() {
            if (teeSelect.value === 'Turbulent Revolution Tee') {
                size1Select.classList.add('block');
                size1Select.setAttribute("name", "size");
                size1Select.classList.remove('hidden');
                size2Select.classList.add('hidden');
                size2Select.classList.remove('block');
                size2Select.setAttribute("name", "size2");
            } else if (teeSelect.value === 'Celestial Revy Tee') {
                size2Select.classList.add('block');
                size2Select.classList.remove('hidden');
                size2Select.setAttribute("name", "size");
                size1Select.classList.add('hidden');
                size1Select.classList.remove('block');
                size1Select.setAttribute("name", "size1");
            }
            sizeSelect.style.display = 'none';

        });
    </script>
</body>

</html>
