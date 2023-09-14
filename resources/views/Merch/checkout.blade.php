{{-- isi form2 pas mau checkout --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    @vite('resources/css/app.css')
    <title>List Merch</title>
</head>

<body class="bg-black">
    <div class="flex justify-center">
        <div class="text-center">
            <h1>Order Merch</h1>

            <h2>Detail Transaksi</h2>
            <table border="1" cellpadding="10">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                </tr>
                <?php
                $no = 1;
                $total = 0;
                ?>
                @foreach ($detailTrans as $obj)
                <tr>
                    <td>{{ $no++ }}</td>
                    @foreach ($merchs as $merch)
                    @if ($merch->id == $obj->merch_id)
                    <td>{{ $merch->name }}</td>
                    @break
                    @endif
                    @endforeach

                </tr>
                <?php $total += $obj->total_price; ?>
                @endforeach
                <tr>
                    <td colspan="3">Total</td>
                    <td>{{ $total }}</td>
                </tr>
                <tr>
                    <td colspan="3">Status</td>
                    <td>{{ $order->status }}</td>
                </tr>
            </table>
            </div. <form action="/order" enctype="multipart/form-data" method="post">
            <div class="flex justify-center align-middle form-container">
                <div class="flex flex-col w-[400px] max-w-[95vw]">
                    <div class="w-full form-content shadow-md  px-8 py-3 mb-10 font-pathway shadow-[#FFF000]">
                        <div class="w-full font-taruno text-md md:text-lg text-white text-center">Data Tim</div>
                        @csrf
                        @if (session()->has('success'))
                        <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div>
                        @endif
                        <div>
                            <div class="mb-1">
                                <label class="block form-label text-sm mb-0" for="">
                                    <span class="">Nama</span>
                                </label>
                                <div>
                                    <input required
                                        class="block @error('tim1_penyiar1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                        type="text" placeholder="nama" name="name" value="{{ old('tim1_penyiar1') }}">
                                    @error('tim1_penyiar1')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-1">
                            <div>
                                <label class="block form-label text-sm mb-0" for="">Email</label>
                            </div>
                            <div>
                                <input required
                                    class="block @error('tim1_institusi') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="email" name="email" value="{{ old('tim1_institusi') }}">
                                @error('tim1_institusi')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div class="mb-1">
                                <div>
                                    <label class="block form-label text-sm mb-0" for="">Nomor Telepon</label>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('tim1_nims1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                        type="text" placeholder="nomor telepon" name="wa" value="{{ old('tim1_nims1') }}">
                                    @error('tim1_nims1')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <input class="hidden" name="total_price" value="{{ $total }}" />
                    <div class="w-full form-content shadow-md  px-8 py-3 mb-4 font-pathway shadow-[#FFF000]">
                        <div class="mb-1">
                            <div>
                                <label
                                    class="block font-taruno text-center text-md md:text-lg text- form-label text-sm mb-0"
                                    for="">Bukti Pembayaran</label>
                            </div>
                            <div>
                                <h6 class="text-sm">Pembayaran sebesar Rp 150.000,~ ke xxxxx a/n xxxxx</h6
                                    class="text-sm">
                            </div>
                            <div>
                                <input required
                                    class="block @error('payment_proof') border-red-500 @enderror w-full mb-5 text-xs text-gray-900 border  cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    type="file" accept="image/*" name="payment_proof">
                                @error('payment_proof')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <button class="button-submit font-taruno text-white bg-[#0E0EC0] w-full text-sm px-5 py-1"
                                type="submit" onclick="return confirm('Pastikan data yang dimasukkan benar adanya')">
                                Send
                            </button>
                        </div>
                    </div>
                </div>
                </form>
                <div id="pay-button"
                    class="bg-green-300 rounded-md font-bold flex justify-center items-center py-1 cursor-pointer">
                    Pay
                </div>
            </div>

</body>

</html>